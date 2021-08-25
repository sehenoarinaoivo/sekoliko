<!DOCTYPE html>
<!-- saved from url=(0045)./admin/classes -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> les classes </title>
    <link media="all" type="text/css" rel="stylesheet" href="./les classes_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./les classes_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./les classes_files/font-awesome.css">

    <script src="./les classes_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./les classes_files/style.css">


       
  </head>

<body class="" style="">


  <div class="navbar navbar-default panel-nav">
      
        <div class="container-fluid">
          
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>      
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>  
                <span class="icon-bar"></span>          
              </button> 
              <a href="."><img src="./les classes_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">
                <li><a class="btn btn-danger btn-sm" href="../../index.php" style="font-size:12px;">déconnecter <i class="glyphicon glyphicon-log-out"></i></a></li>
              </ul>

            </div>


        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">

<?php
  require('../config_procedural.php');

  if(isset($_REQUEST["nom_class"], $_REQUEST["propos_class"])){

    $nom_class=stripslashes($_REQUEST['nom_class']);
    $nom_class=mysqli_real_escape_string($conn, $nom_class);

    $propos_class=stripslashes($_REQUEST['propos_class']);
    $propos_class=mysqli_real_escape_string($conn, $propos_class);
  

  $query="INSERT INTO `classe` (`nom_class`, `propos_class`) VALUES ( '$nom_class', '$propos_class')";
  

  $res = mysqli_query($conn, $query);
  if($res){
      header("Location: ./classes.php");
  }
}else{

?>

<div class="panel panel-default panel-main">
  <div class="panel-body">

  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Accueil</a></li>
    <li class="active">les classes</li>
  </ol>
  
<a data-toggle="modal" data-target="#new_class" href="./admin/classes#" class="btn btn-warning btn-lg"><i class="fa fa-blackboard"></i> Nouvel classe</a>



<div class="modal fade" id="new_class" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">Nouvel classe</h4>
      </div>
      <div class="modal-body">
        

<form method="POST" action="classes.php" accept-charset="UTF-8" class="col-md-12" id="myForm" data-toggle="validator" novalidate="true"><input name="_token" type="hidden" value="6uinzD5MrRoToKoJCgQ1i6MuOmaXp2LmCJqhQGQm">

      <div class="col-md-12">
          <div id="resultajax" class="center"></div>
      </div>

      <div class="col-md-12">  
      
              <div class="form-group has-error has-danger">
                <label class="control-label">nom : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                <input placeholder="" class="form-control input-lg" required="required" name="nom_class" type="text" value=""> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"><ul class="list-unstyled"><li>Please fill out this field.</li></ul></div>
              </div>

              <div class="form-group">
                <label class="control-label">note : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                <textarea rows="5" class="form-control" name="propos_class" cols="50"></textarea> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
              </div>

      </div>

 

      <div class="clear"></div><br>
      <div class="col-md-12">
        <input class="btn btn-info btn-block input-lg disabled" type="submit" value="Nouvel classe"> 
      </div>


</form>

     
  <div class="clear"></div><br>

<script type="text/javascript">
      
/*
        $('#myForm').submit(function(event) {

          event.preventDefault();

          $('#resultajax').append('<img src="./images/loader.gif" alt="attendez ..." />');

          $('#myForm input.btn').hide();

          
           $.ajax({
            type: 'POST',
            url: './admin/classes/new',
            data: $(this).serialize(),

            success: function(data) {
                              
                if(data == 'true') {   
                  $('#resultajax').html("<br><div class='alert alert-success center'><strong>ajouter avec succès</strong></div>");
                  $('#myForm input.btn').show();
                 }

                if(data == 'false') {
                  $('#resultajax').html("<br><div class='alert alert-danger center'><strong>Une erreur est survenue .. réessayer</strong></div>");
                  $('#myForm input.btn').show();
                }
                                     
              }

            });
                          
          });

          function refresh() {
            // to current URL
            window.location='./classes.php';
          }

</script>




      </div>
      <div class="modal-footer">
        <button type="button" onclick="refresh();" class="btn btn-default" data-dismiss="modal">fermer</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<?php
  }

?>
<div class="clear"></div><hr>


<div class="clear"></div>

    <div class="table-responsive">
      <table class="table table table-striped table-bordered">
        <thead>

          <tr class="tr">
            <th>classe</th>
            <th>Nombre d'étudiants</th>
            <th>note</th>         
            <th>modifier</th>
            <th>supprimer</th>
          </tr>
        </thead>
        <tbody>
        <?php   

            $ins = $base = prepare("SELECT * FROM `classe`");
            $ins->execute();


            while($result=$ins->fetch())
            {
            ?>

          <tr class="tr-body">

            <td><?php echo $result["nom_class"]?></td>
            <td> <?php  echo $result["nom_class"]  ?>  </td>
            <td><?php  $result["propos_class"]   ?></td>
            <td><a href="./admin/classes?id=91"><i class="fa fa-edit"></i></a></td>
            <td><a onclick="return confirm(&#39;supprimer&#39;)" href="./admin/class/91/delete"><i class="fa fa-trash"></i></a></td>

          </tr>
          
          <?php } ?>

        </tbody>
      </table>
    </div><!-- /.table-responsive -->

    <div class="clear"></div>
    <div class="center">
        
    </div>


</div>
</div>



</div>


     
     <script src="./les classes_files/bootstrap.min.js"></script>

     <script src="./les classes_files/validator.js"></script>



</body></html>