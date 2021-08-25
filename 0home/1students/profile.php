<!DOCTYPE html>
<!-- saved from url=(0055)./admin/student/4/profile -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> Student DEMO </title>
    <link media="all" type="text/css" rel="stylesheet" href="./profile_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./profile_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./profile_files/font-awesome.css">

    <script src="./profile_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./profile_files/style.css">


       
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
              <a href="."><img src="./profile_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">
                <li><a class="btn btn-danger btn-sm" href="./logout" style="font-size:12px;">logout <i class="glyphicon glyphicon-log-out"></i></a></li>
              </ul>

            </div>


        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">


<div class="panel panel-default panel-main">
  <div class="panel-body">
    


  <ol class="breadcrumb no-print">
    <li><a href="../homeAdmin.php">Home</a></li>
    <li><a href="./students.php">students</a></li>
    <?php

        include("../config_PDO.php");     //Connecting Data

        $ins = $base->prepare('SELECT * FROM eleve WHERE id = :id');
        $ins->execute(array("id"=>$_GET["id"]));

      //inserer image dans variable get_user_image
      $get_user_image = $base->prepare('SELECT images FROM eleve WHERE id = ?');
          


        while($result=$ins->fetch())
        {
             
          
          $get_user_image->execute(array(
            $result['id']
          ));
          $user_image = $get_user_image->fetch()[0];

          //Testons s'il a une image ou pas !!...
          if($user_image == "") {
            $user_image = "students_files/student.png";
          }


        ?>

    <li class="active"><?php echo $result["pseudo"] ?></li>
  </ol>
  <div class="clear"></div><hr class="no-print">


     
    <div class="col-md-12">
   
   
          <div class="panel panel-info">
            <div class="panel-heading no-print">
              <h3 class="panel-title"><?php echo $result["pseudo"] ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">


                <div class="col-md-3 col-lg-3" align="center"> 
                  <img src="<?php echo $user_image ?>" class="img-thumbnail img-responsive" alt="">  
                </div>
                
<div id="pdf2htmldiv">

                <div class=" col-md-9 col-lg-9"> 
                  <table class="table table-user-information">
                    <tbody>

                      <tr>
                        <td></td>
                        <td></td>
                      </tr>
                  
                      <tr>
                        <td>Full name :</td>
                        <td class="td_details"><?php echo $result["nom_prenom"] ?></td>
                      </tr>

                      <tr>
                        <td>admission number :</td>
                        <td class="td_details"><?php echo $result["numero"] ?></td>
                      </tr>
                      <tr>
                        <td>guardian :</td>
                        <td class="td_details"> 
                          <a class="no-print" href="./admin/parent/3/profile">
                            <span class="badge green-bg"><?php echo $result["parent"] ?></span>
                          </a> 
                        <span class="span-print"><?php echo $result["parent"] ?></span> 
                      </td>
                      </tr>
                      <tr>
                        <td>class :</td>
                        <td class="td_details"><?php echo $result["class"] ?> </td>
                      </tr>
                      <tr>
                        <td>Date of Birth :</td>
                        <td class="td_details"> <?php echo $result["date_naissance"] ?> </td>
                      </tr>  

                      <tr>
                        <td>gender :</td>
                        <td class="td_details"> <?php echo $result["genre"] ?> </td>
                      </tr>
                      <tr>
                        <td>address :</td>
                        <td class="td_details"><?php echo $result["adresse"] ?> </td>
                      </tr>
                      <tr>
                        <td>adresse e-mail :</td>
                        <td class="td_details"> <?php echo $result["email"] ?> </td>
                      </tr>
                      <tr>
                        <td>phone :</td>
                        <td class="td_details"> <?php echo $result["phone"] ?> </td>
                      </tr>
                                     
                    </tbody>
                  </table>
                </div>
</div>
<?php }  ?>
              </div>

            </div>
            <div class="panel-footer no-print">

              <a class="btn btn-default" onclick="window.open(&#39;./admin/profile_4/print&#39;, &#39;newwindow&#39;, &#39;width=1280,height=720&#39;); return false;" href="./admin/profile_4/print"><i class="fa fa-print"></i> Print</a>

              <a href="./admin/messages/4/conversation" class="btn btn-sm btn-warning"><i class="fa fa-envelope"></i></a>
            </div>
            
          </div>

  </div>
    


  </div>
</div>

</div>
     
     <script src="./profile_files/bootstrap.min.js"></script>

     <script src="./profile_files/validator.js"></script>



</body></html>