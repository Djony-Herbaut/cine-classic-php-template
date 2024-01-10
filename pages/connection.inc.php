<?php
    try{
        $_pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
        $_bdd = new PDO('mysql:host=localhost; 
                dbname=Projet_cine','root','', 
                array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $_pdo_options));
        }
        catch(Exception $e){
            die("Error Data base de votre base ".$e->getMessage());
             //en cas d'érreur on affiche un message
            }
    $_response = $_bdd->query('SELECT * FROM movie ORDER BY titre ASC LIMIT 10');
?>