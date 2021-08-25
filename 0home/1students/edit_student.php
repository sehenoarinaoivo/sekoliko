<?php
    include("../config_PDO.php");   //connecting Data

    if(isset($_FILES['images']) AND $_FILES['images']['error'] == 0) {
        $valid_extension = array('png','jpg','jpeg');
        $get_extension = pathinfo($_FILES['images']['name']);
        $extension = $get_extension['extension'];

        if(in_array(strtolower($extension), $valid_extension)) {
            $pathimages = 'upload/photo_de_profile/' . basename($_FILES['images']['name']);
            move_uploaded_file($_FILES['images']['tmp_name'], $pathimages);
        }
    }





    // $ins = $base->prepare("UPDATE `vehicule_mada` SET `nombre_place` = :nb_place, `nom_proprietaire` = :proprietaire, `description` = :descr WHERE `vehicule_mada`.`id` = :id;");

    $ins = $base->prepare("UPDATE `eleve` SET `parent` = :parent, `nom_prenom` = :nom', `class` = :class, `numero` = :numero, `genre` = :genre, `date_naissance` = :naissance, `adresse` = :adresse, `email` = :email, `phone` = :phone, `images` = :pathimages WHERE `eleve`.`id` = :id;");
    $ins->execute(array(
        "parent"=>$_POST["parent"],
        "nom"=>htmlspecialchars($_POST["nom"]),
        "class"=>$_POST["class"],
        "numero"=>$_POST["numero"],
        "genre"=>$_POST["genre"],
        /* "pseudo"=>htmlspecialchars($_POST["pseudo"]),
        "mdp"=>htmlspecialchars($_POST["mdp"]),*/
        "naissance"=>htmlspecialchars($_POST["naissance"]),
        "adresse"=>htmlspecialchars($_POST["adresse"]),
        "email"=>htmlspecialchars($_POST["email"]),
        "phone"=>$_POST["phone"],
        "pathimages"=>htmlspecialchars($pathimages),
        "id"=>$_GET["id"],
));



?>