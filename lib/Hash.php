<?php
class Hash{
    public static function create($algo, $sifra, $so){
        $x = hash_init($algo, HASH_HMAC, $so);
        hash_update($x, $sifra);
        return hash_final($x);
    }
}
