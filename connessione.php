<?php
$localhost = "127.0.0.1";
$user = "root";
$password = "";



$connessione = new mysqli($localhost, $user, $password,);

if ($connessione === false) {
die("errore di connessione");
}