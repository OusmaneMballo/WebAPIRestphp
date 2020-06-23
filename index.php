<?php
header('Content-Type: application/jsan');
try {
    $pdo=new PDO('mysql:host=localhost;port=3306;dbname=planteapi;','root','');
}catch (Exception $ex){

}
