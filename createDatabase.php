<?php
$localhost = "127.0.0.1";
$user = "root";
$password = "";



$connessione = new mysqli($localhost, $user, $password,);

if ($connessione === false) {
    die("errore di connessione");
}

$database ="CREATE DATABASE database_costumers";

 $connessione->query($database);




 $table= "CREATE TABLE database_costumers.custumers_(
    id INT Null primary Key Auto_increment,
    Nome Varchar(150) Not Null,
    Email Varchar(150) Not Null,
    Discord_handle Varchar(150) not null,
    Application_Name Varchar(150) not null,
    Application_avarage Varchar(150) not null


 )";

$connessione->query($table);


$connessione->close();
