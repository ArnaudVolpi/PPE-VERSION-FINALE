<?php
try{
  $pdo_option[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
  $connexion = new PDO('mysql:host=localhost;dbname=ppe_arbitre', 
                       'root', 
                       '', 
                        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                              PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch (Exception $e){
  die( 'Erreur : ' . $e->getMessage());
}