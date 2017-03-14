<?php
$username = "root";
$password = "";

try{
    $pdo = new pdo('mysql:host=localhost;dbname=check-turboperformance_crm', $username, $password);
}
catch (PDOException $e){
    print "!Error" . $e->getMessage();
    die();
}
