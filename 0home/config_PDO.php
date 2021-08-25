<?php
/******************************************************
----------------Configuration Obligatoire--------------
Veuillez modifier les variables ci-dessous pour que le
forum puisse fonctionner correctement.
******************************************************/

//On se connecte a la base de donnee

    // $host = "localhost";
    // $username = "root";
    // $password = "";
    // $dbname = "stage";
    // $connection = mysqli_connect($host, $username, $password, $dbname);
    // if(!$connection){
    //     die("Connection failed : " .mysqli_connect_error());
    // }
    // echo "Connected successfully";


//Nom dutilisateur de ladministrateur
// $admin='admin';


try{
    $base = new PDO("mysql:host=localhost; dbname=stage","root","");
}
catch(exception $e){
 die("Erreur".$e->getMessage());
}

?>