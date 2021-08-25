<!DOCTYPE html>
<!-- saved from url=(0046)./admin/subjects -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="/images/favicon.png">
    <title> subjects </title>
    <link media="all" type="text/css" rel="stylesheet" href="./subjects_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./subjects_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./subjects_files/font-awesome.css">

    <script src="./subjects_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./subjects_files/style.css">
       
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
              <a href="."><img src="./subjects_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
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

<?php
      require('../config_procedural.php'); //connecting Data

      if(isset($_REQUEST['nom_matiere'], $_REQUEST['class_matieres'], $_REQUEST['prof_matiere'], $_REQUEST['propos_matiere']))
      {     
        $nom_matiere = stripslashes($_REQUEST['nom_matiere']);
        $nom_matiere = mysqli_real_escape_string($conn, $nom_matiere); 

        $class_matieres = stripslashes($_REQUEST['class_matieres']);
        $class_matieres = mysqli_real_escape_string($conn, $class_matieres);
        
        $prof_matiere = stripslashes($_REQUEST['prof_matiere']);
        $prof_matiere = mysqli_real_escape_string($conn, $prof_matiere); 

        $propos_matiere = stripslashes($_REQUEST['propos_matiere']);
        $propos_matiere = mysqli_real_escape_string($conn, $propos_matiere);
      
        //requéte SQL + mot de passe crypté
        $query = "INSERT into `subject` (`nom_matiere`, `class_matieres`, `prof_matiere`, `propos_matiere`) VALUES ('$nom_matiere', '$class_matieres', '$prof_matiere', '$propos_matiere')";

        // INSERT INTO `subject` (`id_subject`, `nom_matiere`, `class_matieres`, `prof_matiere`, `propos_matiere`) VALUES (NULL, 'Physique-Chimie', 'Troisieme', 'Felana Fanomezantsoa', 'Coefficent 4 pour option B et coefficient 2 pour option A');

        // Exécuter la requête sur la base de données
        $res = mysqli_query($conn, $query);
        if($res){
          header("Location: subjects.php");
        }
    }else{

?>

<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Home</a></li>
    <li class="active">subjects</li>
  </ol>
  
<a data-toggle="modal" data-target="#new_class" href="./admin/subjects#" class="btn btn-warning btn-lg"><i class="fa fa-book"></i> new subject</a>


<div class="modal fade" id="new_class">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">new subject</h4>
      </div>
      <div class="modal-body">
        

<form method="POST" action="subjects.php" accept-charset="UTF-8" class="col-md-12" id="myForm" data-toggle="validator" novalidate="true">
  <input name="_token" type="hidden" value="9g4ipjNErSON1N3c7z0WBpHJxpBzKc3MUc6CNhQ0">

      <div class="col-md-12">
          <div id="resultajax" class="center"></div>
      </div>

      <div class="col-md-12">  
      
              <div class="form-group">
                <label class="control-label">name : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-book"></i></span>
                <input placeholder="" class="form-control input-lg" required="required" name="nom_matiere" type="text" value=""> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

              <div class="form-group">
                <label class="control-label">class  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                  <select name="class_matieres" class="form-control input-lg">
                    <option value="">select</option>
                          <option value="SIXIEME A">SIXIEME A</option>
                          <option value="CINQUIEME">CINQUIEME</option>
                          <option value="QUATRIEME">QUATRIEME</option>
                          <option value="TROISIEME">TROISIEME</option>
                          <option value="SECONDE">SECONDE</option>
                          <option value="PREMIERE">PREMIERE</option>
                          <option value="TERMINAL">TERMINAL</option>
                    </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

              <div class="form-group">
                <label class="control-label">teacher  : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <select name="prof_matiere" class="form-control input-lg">
                            <option value="">select</option>
                            <option value="Berthine Jeannette">Berthine Jeannette</option>
                            <option value="Alphonsine Myriam">Alphonsine Myriam</option>
                            <option value="ELodie Francine">ELodie Francine</option>
                  </select>
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

              <div class="form-group">
                <label class="control-label">note : </label>
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-info-circle"></i></span>
                <textarea rows="5" class="form-control" name="propos_matiere" cols="50"></textarea> 
                </div>
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors"></div>
                </div>

      </div>

            <div class="clear"></div><br>
            <div class="col-md-12">
              <input class="btn btn-info btn-block input-lg disabled" type="submit" value="new subject"> 
            </div>

</form>


        <div class="clear"></div><br>

<script type="text/javascript">
    
/*
        $('#myForm').submit(function(event) {

          event.preventDefault();

          $('#resultajax').append('<img src="./images/loader.gif" alt="please wait ..." />');

          $('#myForm input.btn').hide();

          
           $.ajax({
            type: 'POST',
            url: './admin/subjects/new',
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
                                     
              }

            });
                          
          });

          function refresh() {
            // to current URL
            window.location='./admin/subjects';
          }
*/
</script>

      </div>
      <div class="modal-footer">
        <button type="button" onclick="refresh();" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<div class="clear"></div><hr>

<?php
  }

?>





<div class="clear"></div>

    <div class="table-responsive">
      <table class="table table table-striped table-bordered">
        <thead>
          <tr class="tr">
            <th>subject</th>
            <th>class</th>         
            <th>teacher</th>         
            <th>note</th>         
            <th>edit</th>
            <th>delete</th>
          </tr>
        </thead>
        <tbody>

          <tr class="tr-body">

            <td>test</td>

            <td>
              SIXIEME A
             
            </td>

            <td>
            
            <a href="./admin/teacher/2/profile"><span class="badge green-bg">Teacher DEMO</span></a>
              
            </td>

            <td>ok</td>

            <td><a href="./admin/subjects?id=53"><i class="fa fa-edit large"></i></a></td>

            <td><a onclick="return confirm(&#39;delete&#39;)" href="./admin/subject/53/delete"><i class="glyphicon glyphicon-trash large"></i></a></td>

          </tr>


          <tr class="tr-body">

            <td>3D</td>

            <td>
            الثانية ا
             
            </td>

            

            <td>
            
            <a href="./admin/teacher/2/profile"><span class="badge green-bg">Teacher DEMO</span></a>
              
            </td>

            <td></td>

            <td><a href="./admin/subjects?id=51"><i class="fa fa-edit large"></i></a></td>

            <td><a onclick="return confirm(&#39;delete&#39;)" href="./admin/subject/51/delete"><i class="glyphicon glyphicon-trash large"></i></a></td>

          </tr>


          <tr class="tr-body">

            <td>fr</td>

            <td>
            SIXIEME A
             
            </td>

            

            <td>
            -
            </td>

            <td></td>

            <td><a href="./admin/subjects?id=50"><i class="fa fa-edit large"></i></a></td>

            <td><a onclick="return confirm(&#39;delete&#39;)" href="./admin/subject/50/delete"><i class="glyphicon glyphicon-trash large"></i></a></td>

          </tr>


          <tr class="tr-body">

            <td>الرياضيات</td>

            <td>
            test
             
            </td>

            

            <td>
            -
            </td>

            <td></td>

            <td><a href="./admin/subjects?id=40"><i class="fa fa-edit large"></i></a></td>

            <td><a onclick="return confirm(&#39;delete&#39;)" href="./admin/subject/40/delete"><i class="glyphicon glyphicon-trash large"></i></a></td>

          </tr>

 

        </tbody>
      </table>
    </div><!-- /.table-responsive -->

    <div class="clear"></div>
    <div class="center">
        
    </div>


  </div>
</div>



</div>


     
     <script src="./subjects_files/bootstrap.min.js"></script>

     <script src="./subjects_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>

</body></html>