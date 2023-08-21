<?php

require 'connessione.php';
$nomeCustumer = $connessione->real_escape_string($_REQUEST[ 'nome']);
$mail =  $connessione->real_escape_string($_REQUEST['email']);
$discord_handle = $connessione->real_escape_string($_REQUEST [ 'discord_handle']);
$application_Name = $connessione->real_escape_string($_REQUEST['application_name']);
$application_avarage = $connessione->real_escape_string($_REQUEST[ 'application_avarage']);




$insert_query= "INSERT INTO custumers_(
  Nome,Email,Discord_handle,Application_Name,Application_avarage
)VALUES($nomeCustumer,$mail,$discord_handle,$application_Name,$application_avarage)";

$connessione->query($insert_query);
?>



