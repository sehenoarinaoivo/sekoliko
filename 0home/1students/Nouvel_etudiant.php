<!DOCTYPE html>
<!-- saved from url=(0050)https://dabach.co.ma/easyschool/admin/students/new -->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!-- <link rel="icon" href="/easyschool/images/favicon.png"> -->
    <title> Nouvel étudiant </title>
    <link media="all" type="text/css" rel="stylesheet" href="./Nouvel étudiant_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Nouvel étudiant_files/bootstrap-theme.min.css">

    <!-- <link media="all" type="text/css" rel="stylesheet" href="./Nouvel étudiant_files/font-awesome.css"> -->

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <script src="./Nouvel étudiant_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./Nouvel étudiant_files/style.css">


       
  </head>

<body>


  <div class="navbar navbar-default panel-nav">
      
        <div class="container-fluid">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>      
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>          
              </button> 
              <a href="#"><img src="./Nouvel étudiant_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">                 
                <li><a class="btn btn-danger btn-sm" href="../../index.php" style="font-size:12px;">logout <i class="fa fa-log-out"></i></a></li>
              </ul>

            </div>

        </div>

    </div>

<div class="clear"></div>

<div class="container-fluid">


<link media="all" type="text/css" rel="stylesheet" href="./Nouvel étudiant_files/bootstrap-datepicker.css">

<!-- <script src="./Nouvel étudiant_files/bootstrap-datepicker.js"></script> -->


<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '-3d'
});
</script>



<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Accueil</a></li>
    <li><a href="../1students/students.php">les étudiants</a></li>
    <li class="active">Nouvel étudiant</li>
  </ol>
  <div class="clear"></div><hr>


  <div class="container">
     
    <form method="post" action="signup_students.php" accept-charset="UTF-8" class="col-md-12" id="myForm" data-toggle="validator" enctype="multipart/form-data" novalidate="true">
        <!-- <input name="_token" type="hidden" value="F8JxzRJjqzSauIvkDstNazTo2x2vanryycxbyoaH"> -->

      <div class="col-md-12" style="background-color: #f9f9f9; border: 1px #ccc dashed; margin-bottom: 20px; padding: 8px;">

              <div class="form-group">
                <label class="control-label">Parents  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-eye"></i></span>
                  <select name="parent" class="form-control input-lg">
                    <option value="">choisir</option>
                    <?php 
                      //connecting Data PDO
                      require("../config_PDO.php"); 

                    //preprer Table Parent
                    $ins = $base->prepare('SELECT * FROM `parent`');
                    $ins->execute();

                    while($result=$ins->fetch()) {

                    ?>
                      <option value="<?php echo $result['nom_prenom'];  ?>"><?php echo $result['nom_prenom']; ?></option>

                    <?php

                      }

                    ?>
                  </select>
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                <a href="../3parents/Nouvelparents.php" class="btn btn-warning">Nouvel guardian</a>
              </div>


              <div class="form-group">
                <label class="control-label">classe  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-chalkboard"></i></span>
                  <select name="class" class="form-control input-lg">
                    <option value="">choisir</option>

                    <?php

                      $ins = $base->prepare("SELECT * FROM `classe`");
                      $ins->execute();
                    

                      while($result= $ins->fetch()){


                    ?>
                        <option value="<?php echo $result['nom_class'];  ?>"><?php echo $result['nom_class'];  ?></option>
                    
                    <?php

                      }
                    
                    ?>
                  </select>
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

              <div class="form-group">
                <label class="control-label">le numéro d'inscription : </label>
                <div class="input-group">
                <span class="input-group-addon" style="color:black;"><i class="fa fa-barcode"></i></span>
                <input placeholder="" class="form-control input-lg" name="numero" type="number" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

      </div>

      <div class="col-md-6">  
      
              <div class="form-group">
                <label class="control-label">nom et prénom : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>

                <input placeholder=""  class="form-control input-lg" required="required" name="nom" type="text" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">genre : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                  <select name="genre" class="form-control input-lg">
                    <option value="">choisir</option>
                    <option value="Garçon">Garçon</option>
                    <option value="Fille">Fille</option>
                  </select>
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">nom d'utilisateur : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input placeholder="" class="form-control input-lg" required="required" name="pseudo" type="text" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">mot de passe  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input name="mdp" type="password" data-minlength="6" class="form-control input-lg" id="inputPassword" placeholder="" required="">
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">confirmation du mot de passe  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input name="password_confirm" type="password" class="form-control input-lg" data-match="#inputPassword" data-match-error="Votre champ n&#39;est pas identique" placeholder="" required="">
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

      </div>

      <div class="col-md-6">


              <div class="form-group">
                <label class="control-label">date de naissance : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input placeholder="" class="form-control input-lg" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="naissance" type="date" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">adresse : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input placeholder="" class="form-control input-lg" name="adresse" type="text" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>


              <div class="form-group">
                <label class="control-label">adresse e-mail  : </label>
                 <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                <input placeholder="" class="form-control input-lg" data-error="Adresse email invalide" name="email" type="email" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>


               <div class="form-group">
                    <label class="control-label">téléphone : </label>

                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                      <input pattern="^[_0-9-+]{1,}$" maxlength="20" data-error="fr.phone_invalide" class="form-control input-lg" name="phone" type="number" value=""> 
                    </div>
                    <span class="fa form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>

                </div>

                <div class="form-group" style="background-color: #f9f9f9; border: 1px #ccc dashed; padding: 10px;">
                  <label class="control-label">Photo  : </label>
                  <input class="btn btn-default" id="file" name="images" type="file">

                </div>
                
        </div>

            <div class="clear"></div><br>
            <div class="col-md-12">
              <button class="btn btn-info btn-block input-lg disabled" type="submit" value="">Nouvel étudiant</button> 
            </div>


              </form>

            <!-- </div>
        </div> -->
  </div>
</div>

?>

<script type="text/javascript">
  $('#myForm').validator();
</script>

</div>

     
     <script src="./Nouvel étudiant_files/bootstrap.min.js"></script>
     <script src="./Nouvel étudiant_files/validator.js"></script>
     <script src="../fontawesome/js/all.js"></script>


</body>
</html>