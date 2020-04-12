<?php
    try {
        $con = new PDO("mysql:host=localhost;dbname=php_crud","root","");
    } catch (PDOException $th) {
        echo $th->getMessage();
    }
?>