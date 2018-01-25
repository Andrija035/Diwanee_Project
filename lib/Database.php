<?php
class Database extends PDO
{
    public function __construct($TYPE, $HOST, $NAME, $USER, $PASS){
        parent::__construct($TYPE . ':host=' . $HOST . ';dbname=' . $NAME, $USER, $PASS);
    }
    public function select($sql, $array = [], $fetchMode = PDO::FETCH_ASSOC){
        $rez = $this->prepare($sql);
        foreach ($array as $key => $value) {
            $rez->bindValue("$key", $value);
        }

        $rez->execute();
        return $rez->fetchAll($fetchMode);
    }
    public function insert($table, $data){
        ksort($data);

        $fieldNames = implode('`, `', array_keys($data));
        $fieldValues = ':' . implode(', :', array_keys($data));

        $sth = $this->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");

        foreach ($data as $key => $value) {
            $sth->bindValue(":$key", $value);
        }

        $sth->execute();
        $this->exec("ALTER TABLE $table ORDER BY id DESC");
    }
}
