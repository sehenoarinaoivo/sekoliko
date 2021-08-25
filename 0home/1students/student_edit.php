<!DOCTYPE html>
<!-- saved from url=(0052)./admin/student/4/edit -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> Student DEMO </title>
    <link media="all" type="text/css" rel="stylesheet" href="./student_edit_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./student_edit_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./student_edit_files/font-awesome.css">

    <script src="./student_edit_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./student_edit_files/style.css">


       
  </head>

<body>
<?php
    require("../config_PDO.php");   //Connecting Data

?>

  <div class="navbar navbar-default panel-nav">
      
        <div class="container-fluid">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>      
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>          
              </button> 
              <a href="."><img src="./student_edit_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">                 
              
                <li class="dropdown">
                  <a href="./admin/student/4/edit#" class="btn btn-default btn-sm" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">language <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="./lang?set=ar">عربي</a></li>
                    <li><a href="./lang?set=fr">francais</a></li>
                    <li><a href="./lang?set=en">english</a></li>
                  </ul>
                </li>
                <li><a class="btn btn-danger btn-sm" href="./logout" style="font-size:12px;">logout <i class="glyphicon glyphicon-log-out"></i></a></li>
              </ul>

            </div>


        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">

<link media="all" type="text/css" rel="stylesheet" href="./student_edit_files/bootstrap-datepicker.css">

<script src="./student_edit_files/bootstrap-datepicker.js"></script>


<script type="text/javascript">
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    startDate: '-3d'
});
</script>


<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="./admin">Home</a></li>
    <li><a href="students.php">students</a></li>
    <li class="active">Student DEMO</li>
  </ol>
  <div class="clear"></div><hr>



<div class="clear"></div>

      <div class="col-md-12">

      <div class="col-md-12">

      <div class="col-md-2 center">
<img src="./student_edit_files/student.png" width="150px" height="150px" class="img-circle" alt="">      </div>

<form method="POST" action="edit_student.php" accept-charset="UTF-8" id="myForm" data-toggle="validator" enctype="multipart/form-data" novalidate="true"><input name="_token" type="hidden" value="v9BVAlA466b0wrT54x6QBuwAlALZK2o3C9adPYO9">   
            <div class="col-md-10 yellow-box">

            <div class="col-md-4">
              <div class="form-group">
                <label class="control-label">username : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input placeholder="" class="form-control input-lg" readonly="readonly" name="username" type="text" value="student"> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="form-group has-error has-danger">
                <label class="control-label">password  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input name="password" type="password" data-minlength="6" class="form-control input-lg" id="inputPassword" placeholder="" required="">
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"><ul class="list-unstyled"><li>Please fill out this field.</li><li>Not long enough</li></ul></div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group has-error has-danger">
                <label class="control-label">password confirmation  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                <input name="password_confirm" type="password" class="form-control input-lg" data-match="#inputPassword" data-match-error="Votre champ n&#39;est pas identique" placeholder="" required="">
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"><ul class="list-unstyled"><li>Please fill out this field.</li></ul></div>
                </div>
            </div>

            <div class="col-md-12">
              <div class="form-group">
                <input class="btn btn-danger disabled" type="submit" value="update password">
              </div>
            </div>

            </div>

</form>

<?php 
/*
    if(isset($_GET["id_update"])){
        $ins = $base->prepare("SELECT * FROM `vehicule_mada` WHERE id=:id_upd");
        $ins->execute(array("id_upd"=>$_GET["id_update"]));
        $e=$ins->fetch();
*/
        
        if(isset($_GET["id_update"])){
          $ins = $base->prepare("SELECT * FROM `eleve` WHERE id=:id_upd");
          $ins->execute(array("id_upd"=>$_GET["id_update"]));
          $e=$ins->fetch();

?>



<form method="POST" action="edit_student.php?id=<?php echo $e['id'] ?>" accept-charset="UTF-8" id="myForm" data-toggle="validator" enctype="multipart/form-data" novalidate="true"><input name="_token" type="hidden" value="v9BVAlA466b0wrT54x6QBuwAlALZK2o3C9adPYO9">

  </div>

      <div class="col-md-6">  
      
              <div class="form-group">
                <label class="control-label">Full name : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-star"></i></span>
                <input placeholder="" class="form-control input-lg" required="required" name="nom" type="text" value="<?php echo $e["nom_prenom"]?>"> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">gender  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                  <select name="genre" class="form-control input-lg">

                  <option value="<?php echo $e["genre"] ?>" selected="selected"><?php echo $e["genre"]?></option>
                  <option value="Garçon">Garçon</option>
                  <option value="Fille">Fille</option>
<>
                </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
        </div>


              <div class="form-group">
                <label class="control-label">guardian  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                    
                  <select class="form-control input-lg" name="parent">

                    <option  value="<?php echo $e["parent"];  ?>" selected="selected"><?php echo $e["parent"]; ?></option>
                  
                  <?php  
                  
                  $inser=$base->prepare("SELECT * FROM `eleve`");
                  $inser->execute();

                  while($result=$inser->fetch())
                  {                  
                  ?>
                    <option value="<?php echo $result["parent"] ?>"><?php echo $result["parent"] ?></option>
     
                  <?php   
                    }  
                  ?>

                </select>
                      
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
  </div>

              <div class="form-group">
                <label class="control-label">class : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                  
                  <select class="form-control input-lg" name="class">
                    <option value="<?php echo $e['class'] ?>" selected="selected"><?php echo $e['class'] ?></option>
                  <?php 

                  $inser = $base->prepare("SELECT * FROM `eleve`");
                  $inser->execute();

                  while($result = $inser->fetch())
                  {

                  ?>

                    <option value="<?php  echo $result["class"] ?>"><?php  echo $result["class"] ?></option>                

                <?php   } ?>
                 </select>
              
              </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

              <div class="form-group">
                <label class="control-label"> Numero d'Inscription : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input placeholder="" class="form-control input-lg" name="numero" type="text" value="<?php echo $e["numero"] ?>"> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

      </div>

      <div class="col-md-6">


              <div class="form-group">
                <label class="control-label">Date of Birth : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                <input placeholder="" class="form-control input-lg" data-provide="datepicker" data-date-format="dd/mm/yyyy" name="naissance" type="text" value="<?php echo  $e["date_naissance"]  ?>"> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">address : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                <input placeholder="adresse" class="form-control input-lg" name="adresse" type="text" value="<?php echo $e["adresse"]?> "> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

              <div class="form-group">
                <label class="control-label">adresse e-mail  : </label>
                 <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input placeholder="" class="form-control input-lg" data-error="Adresse email invalide" name="email" type="email" value="<?php echo $e["email"]?>">
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>


                  <div class="form-group">
                    <label class="control-label">phone : </label>

                    <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                      <input pattern="^[_0-9-+]{1,}$" maxlength="20" data-error="en.phone_invalide" class="form-control input-lg" name="phone" type="number" value="<?php echo $e["phone"] ?>"> 
                    </div>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>

                  </div>

                  <div class="form-group">
                  <label class="control-label">image  : </label>
                  <input class="btn btn-default" id="file" src="" name="images" value="<?php echo $e["images"] ?>" type="file">

                </div> 
                
        </div>

            <div class="clear"></div><br>
            <div class="col-md-12">
              <!-- <a href="edit_student.php?id_update=<?php //echo $e['id'] ?>"> -->
              <input class="btn btn-info btn-block input-lg" type="submit" value="save change"></a> 
            </div>
      </div>

  </div>
</div>
</form>





<script type="text/javascript">
  $('#myForm').validator();
</script>

</div>
<?php    }   ?>

     
     <script src="./student_edit_files/bootstrap.min.js"></script>

     <script src="./student_edit_files/validator.js"></script>



</body></html>