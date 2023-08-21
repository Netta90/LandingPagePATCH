<?php

$host= "127.0.0.1";
$user="root";
$password="";

$connessione= new mysqli($host,$user,$password);
var_dump($connessione);
if($connessione===false){
    die("CONNEcTION ERROR". $connessione->connect_error);}
    


    $sql="CREATE DATABASE PATCH_custumers";

    $connessione->query($sql);



    $connessione-> close();


