<?php
require 'connessione.php';
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
