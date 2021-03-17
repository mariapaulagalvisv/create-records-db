<?php
    $name =$_REQUEST["name"];
    $gender = $_REQUEST["gender"];
    $stratum = $_REQUEST["stratum"]

    //1. connect to database
    $host = "localhost";
    $dbname = "university_db";
    $username = "root";
    $password = "";

    $cnx = new PDD("mysql:host=$host;dbname=$dbname", $username, $password);
    $sql = "INSERT INTO students (id, name, gender, stratum) VALUES(NULL, $name, '$gender', '$stratum'");
?>