<!DOCTYPE html>
<!-- saved from url=(0048)./admin/emploi/add -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> Timetable </title>

    <link media="all" type="text/css" rel="stylesheet" href="./Timetable_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Timetable_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Timetable_files/font-awesome.css">

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <script src="./Timetable_files/jquery-1.11.3.min.js"></script>

    <link media="all" type="text/css" rel="stylesheet" href="./Timetable_files/style.css">

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
              <a href="."><img src="./Timetable_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">                 
                <li><a class="btn btn-danger btn-sm" href="./logout" style="font-size:12px;">logout <i class="fa fa-log-out"></i></a></li>
              </ul>

            </div>

        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">


<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Home</a></li>
    <li><a href="./Timetable.php">Timetable</a></li>
    <li class="active">new timetable</li>
  </ol>

  <div class="clear"></div><hr>

<form method="POST" action="signup_timetable.php" accept-charset="UTF-8" class="col-md-12" id="myForm" data-toggle="validator" novalidate="true"><input name="_token" type="hidden" value="IHjEdJmN4XWQMmw79osOMDRXJdmUhQebt5Z48F02">

    
      <div class="col-md-12">  

        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">class  : </label>
                <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-blackboard"></i></span>
                  <select name="nom_class" class="form-control input-lg">
                    <option value="">select</option>
                    
                        <?php
                            include("../config_PDO.php");

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
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>
        </div>




        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">day  : </label>
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                    <select name="jour_cours" class="form-control input-lg">
                      <option value="">select</option>

                        <option value="Lundi">Lundi</option>
                        <option value="Mardi">Mardi</option>
                        <option value="Mercredi">Mercredi</option>
                        <option value="Jeudi">Jeudi</option>
                        <option value="Vendredi">Vendredi</option>
                        <option value="Samedi">Samedi</option>
                        <option value="Dimanche">Dimanche</option>

                    </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">teacher  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                  <select name="professeur" class="form-control input-lg">
                    <option value="">select</option>
                      <?php
                      
                      $ins=$base->prepare("SELECT * FROM `professeur`");
                      $ins->execute();
        
                      while($result=$ins->fetch()) {
                      ?>
                        <option value="<?php echo $result['nom_prenom'];  ?>"><?php echo $result['nom_prenom'];  ?></option>
                      
                      <?php
                          }
                      ?>                  
                  </select>

                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>
        </div>


        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">subject  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-blackboard"></i></span>
                  <select name="matiere_time" class="form-control input-lg">
                    <option value="">select</option>

                     <?php

                      $ins=$base->prepare("SELECT * FROM `subject`");
                      $ins->execute();


                          while($result=$ins->fetch()) {
                     ?>
                
                      <option value="<?php echo $result["nom_matiere"]; ?>"><?php echo $result["nom_matiere"]; ?></option>
                  <?php
                    }
                  ?>
                  </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Hour entry  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-time"></i></span>
                  <select name="heure_start" class="form-control input-lg">
                    <option value="">select</option>

                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="1:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>
                    
                  </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>
        </div>

        <div class="col-md-6">
              <div class="form-group">
                <label class="control-label">Hour out  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-time"></i></span>
                  <select name="heure_end" class="form-control input-lg">
                    <option value="">select</option>

                        <option value="08:00">08:00</option>
                        <option value="08:30">08:30</option>
                        <option value="09:00">09:00</option>
                        <option value="09:30">09:30</option>
                        <option value="10:00">10:00</option>
                        <option value="10:30">10:30</option>
                        <option value="11:00">11:00</option>
                        <option value="11:30">11:30</option>
                        <option value="12:00">12:00</option>
                        <option value="12:30">12:30</option>
                        <option value="13:00">13:00</option>
                        <option value="13:30">13:30</option>
                        <option value="14:00">14:00</option>
                        <option value="14:30">14:30</option>
                        <option value="15:00">15:00</option>
                        <option value="15:30">15:30</option>
                        <option value="16:00">16:00</option>
                        <option value="16:30">16:30</option>
                        <option value="17:00">17:00</option>
                        <option value="17:30">17:30</option>
                        <option value="18:00">18:00</option>

                  </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>
        </div>


            <div class="clear"></div><br>

            <div class="col-md-12">
              <div id="resultajax" class="center"></div>
            </div>

            <div class="col-md-12">
              <input class="btn btn-info btn-block input-lg" type="submit" value="add"> 
            </div>


            <div class="clear"></div><br>

      </div>
 

  </form>
  



<script type="text/javascript">
      
/*
        $('#myForm').submit(function(event) {

          event.preventDefault();

          $('#resultajax').append('<img src="./images/loader.gif" alt="please wait ..." />');

          $('#myForm input.btn').hide();

          
           $.ajax({
            type: 'POST',
            url: './admin/emploi/store',
            data: $(this).serialize(),

            success: function(data) {
                              
                if(data == 'true') {   
                  $('#resultajax').html("<br><div class='alert alert-success center'><strong>added successfully</strong></div>");
                  $('#myForm input.btn').show();
                 }

                if(data == 'false') {
                  $('#resultajax').html("<br><div class='alert alert-danger center'><strong>Error! please try again</strong></div>");
                  $('#myForm input.btn').show();
                }


                if(data == 'repeat') {
                  $('#resultajax').html("<br><div class='alert alert-danger center'><strong>Error! Choose another timing</strong></div>");
                  $('#myForm input.btn').show();
                }

                                     
              }

            });
                          
          });

          function refresh() {
            // to current URL
            window.location='./admin/emploi/add';
          }
*/
</script>



  </div>
</div>



</div>


     
     <script src="./Timetable_files/bootstrap.min.js"></script>

     <script src="./Timetable_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>

</body>
</html>