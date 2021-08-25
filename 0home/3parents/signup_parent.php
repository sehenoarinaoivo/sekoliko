<?php

    //connecting Data
    include("../config_PDO.php");



    if(isset($_FILES['images']) AND $_FILES['images']['error'] == 0) {
        $valid_extension = array('png','jpg','jpeg');
        $get_extension = pathinfo($_FILES['images']['name']);
        $extension = $get_extension['extension'];

        if(in_array(strtolower($extension), $valid_extension)) {
            $pathimages = 'uploads/PID_Parents/' . basename($_FILES['images']['name']);
            move_uploaded_file($_FILES['images']['tmp_name'], $pathimages);
        }
    }


    // if(isset( $_POST["parent"]) AND (isset($_POST["nom"]) AND (isset($_POST["class"]) AND (isset($_POST["numero"]) AND (isset($_POST["pseudo"]) AND (isset($_POST["mdp"]) AND (isset($_POST["naissance"]) AND (isset($_POST["email"])) AND (isset($_POST["phone"]))) {

    // }
   

    $ins = $base->prepare("INSERT INTO `parent` (`nom_prenom`, `genre`, `pseudo`, `mdp`, `adresse`, `email`, `phone`, `images`) 
            VALUES (:nom, :genre, :pseudo, MD5(:mdp), :adresse, :email, :phone, :pathimages);");

// INSERT INTO `parent` (`id`, `nom_prenom`, `genre`, `mdp`, `adresse`, `email`, `phone`, `images`) VALUES (NULL, 'Berthine Sandrinette', 'femme', MD5('1111111'), 'Besarety', 'berth@gail.com', '4938573', '');

        $ins->execute(array(
            "nom"=>htmlspecialchars($_POST["nom"]),
            "genre"=>$_POST["genre"],
            "pseudo"=>htmlspecialchars($_POST["pseudo"]),
            "mdp"=>htmlspecialchars($_POST["mdp"]),
            "adresse"=>htmlspecialchars($_POST["adresse"]),
            "email"=>htmlspecialchars($_POST["email"]),
            "phone"=>$_POST["phone"],
            "pathimages"=>htmlspecialchars($pathimages),
        ));
    header("Location: Nouvelparents.php");
?>