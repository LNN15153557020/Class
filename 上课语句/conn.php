<?php
class Connect {

    var $host = "localhost";
    var $user = "root";
    var $pass = "";
    var $database = "bootstrap";
    var $num = 3306;
    var $set_utf = "set names 'utf8'";

    function getLink() {
        $conn = new Connect();
        $host = $conn->host;
        $user = $conn->user;
        $password = $conn->pass;
        $database = $conn->database;
        $port = $conn->num;
        $link = mysqli_connect($host, $user, $password, $database, $port) or ( 'MySQL Connect False');
        return $link;
    }
}

?>
