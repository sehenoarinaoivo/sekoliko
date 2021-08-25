<!DOCTYPE html>
<!-- saved from url=(0049)./admin/parents/new -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> Nouvel gardien </title>
    <link media="all" type="text/css" rel="stylesheet" href="./Nouvelparents_files/bootstrap.css">

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Nouvelparents_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Nouvelparents_files/font-awesome.css">

    <script src="./Nouvelparents_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./Nouvelparents_files/style.css">


       
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
              <a href="."><img src="./Nouvelparents_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">
                <li><a class="btn btn-danger btn-sm" href="./logout" style="font-size:12px;">déconnecter <i class="fa fa-log-out"></i></a></li>
              </ul>

            </div>

        </div>

    </div>

<div class="clear"></div>

<div class="container-fluid">


<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Accueil</a></li>
    <li><a href="./parents.php">les parents</a></li>
    <li class="active">Nouvel gardien</li>
  </ol>
  <div class="clear"></div><hr>





  <form method="POST" action="signup_parent.php" accept-charset="UTF-8" class="col-md-12" id="myForm" data-toggle="validator" enctype="multipart/form-data" novalidate="true"><input name="_token" type="hidden" value="F8JxzRJjqzSauIvkDstNazTo2x2vanryycxbyoaH">

      <div class="col-md-6">  
      
              <div class="form-group">
                <label class="control-label">nom et prénom : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-star"></i></span>
                <input placeholder="" class="form-control input-lg" required="required" name="nom" type="text" value=""> 
                </div>
                <span class="fa form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">genre  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-list"></i></span>
                  <select name="genre" class="form-control input-lg">
                    <option value="">choisir</option>
                    <option value="Homme">Homme</option>
                    <option valu="Femme">Femme</option>
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
              <input class="btn btn-info btn-block input-lg disabled" type="submit" value="Nouvel gardien"> 
            </div>


</form>

  
  </div>
</div>

<script type="text/javascript">
  $('#myForm').validator();
</script>

</div>


     
     <script src="./Nouvelparents_files/bootstrap.min.js"></script>

     <script src="./Nouvelparents_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>


</body></html>