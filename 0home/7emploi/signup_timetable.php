<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


    <?php
    require("../config_PDO.php"); //connecting Data

    // if(isset()){

    // }
    
    $ins = $base->prepare("INSERT INTO `timetable` (`nom_class`, `jour_cours`, `professeur`, `matiere_time`, `heure_start`, `heure_end`) VALUES (:nom_class, :jour_cours, :professeur, :matiere_time, :heure_start, :heure_end);");

        $ins->execute(array(
            'nom_class'=>$_POST['nom_class'],           
            'jour_cours'=>$_POST['jour_cours'],
            'professeur'=>$_POST['professeur'],
            'matiere_time'=>$_POST['matiere_time'],
            'heure_start'=>$_POST['heure_start'],
            'heure_end'=>$_POST['heure_end'],
        ));
        header("Location: nouvelTimetable.php");
    // INSERT INTO `timetable` ( `nom_class`, `jour_cours`, `professeur`, `matiere_time`, `heure_enrty`, `heure_out`) VALUES (NULL, 'Troisieme', 'Lundi', 'Bako Celestine', 'Sciences Naturelles', '08:02:11', '10:02:11');

    ?>


</body>
</html>