<h2>List of users: </h2>
<ul>
    <div id='main'>
<?php
foreach($this->lista as $key => $value) {
    echo "<li><h3>{$value['user']}</h3></li>";
}
?>
    </div>
</ul>
