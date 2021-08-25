
<?php
    //connection Data
    include("../config_PDO.php");

    if(isset($_FILES['images']) AND $_FILES['images']['error'] == 0) {
        $valid_extension = array('png','jpg','jpeg');
        $get_extension = pathinfo($_FILES['images']['name']);
        $extension = $get_extension['extension'];

        if(in_array(strtolower($extension), $valid_extension)) {
            $pathimages = 'upload/photo_de_profile/' . basename($_FILES['images']['name']);
            move_uploaded_file($_FILES['images']['tmp_name'], $pathimages);
        }
    }


    // if(isset( $_POST["parent"]) AND (isset($_POST["nom"]) AND (isset($_POST["class"]) AND (isset($_POST["numero"]) AND (isset($_POST["pseudo"]) AND (isset($_POST["mdp"]) AND (isset($_POST["naissance"]) AND (isset($_POST["email"])) AND (isset($_POST["phone"]))) {

    // }
   
	
    $ins = $base->prepare("INSERT INTO `eleve` (`parent`,`nom_prenom`, `class`, `numero`, `genre`, `pseudo`, `mdp`, `date_naissance`, `adresse`, `email`, `phone`, `images`) 
        VALUES (:parent,:nom, :class, :numero, :genre, :pseudo, MD5(:mdp), :naissance, :adresse, :email, :phone, :pathimages);");
	$ins->execute(array(
            "parent"=>$_POST["parent"],
            "nom"=>htmlspecialchars($_POST["nom"]),
            "class"=>$_POST["class"],
            "numero"=>$_POST["numero"],
            "genre"=>$_POST["genre"],
            "pseudo"=>htmlspecialchars($_POST["pseudo"]),
            "mdp"=>htmlspecialchars($_POST["mdp"]),
            "naissance"=>htmlspecialchars($_POST["naissance"]),
            "adresse"=>htmlspecialchars($_POST["adresse"]),
            "email"=>htmlspecialchars($_POST["email"]),
            "phone"=>$_POST["phone"],
            "pathimages"=>htmlspecialchars($pathimages),
    ));
    // header("Location: Nouvel_etudiant.php");
    ?>

                