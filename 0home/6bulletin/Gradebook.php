<!DOCTYPE html>
<!-- saved from url=(0046)./admin/bulletin -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="./images/favicon.png">
    <title> Gradebook </title>
    <link media="all" type="text/css" rel="stylesheet" href="./Gradebook_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Gradebook_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./Gradebook_files/font-awesome.css">

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <script src="./Gradebook_files/jquery-1.11.3.min.js"></script>


    <link media="all" type="text/css" rel="stylesheet" href="./Gradebook_files/style.css">
   
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
              <a href="."><img src="./Gradebook_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">                 
              
                <li class="dropdown">
                  <a href="./admin/bulletin#" class="btn btn-default btn-sm" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">language <span class="caret"></span></a>
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

<?php
        require("../config_procedural.php");  //connecting Data

        if(isset($_REQUEST['class_student'], $_REQUEST['nom_student'], $_REQUEST['nom_matiere'], $_REQUEST['note_student']))
        {
          $class_student = stripslashes($_REQUEST['class_student']);
          $class_student = mysqli_real_escape_string($conn, $class_student); 

          $nom_student = stripslashes($_REQUEST['nom_student']);
          $nom_student = mysqli_real_escape_string($conn, $nom_student);
          
          $nom_matiere = stripslashes($_REQUEST['nom_matiere']);
          $nom_matiere = mysqli_real_escape_string($conn, $nom_matiere); 

          $note_student = stripslashes(doubleVal($_REQUEST['note_student']));
          $note_student = mysqli_real_escape_string($conn, $note_student); 


          //requéte SQL + mot de passe crypté
          $query = "INSERT into `gradebook` (`class_student`, `nom_student`, `nom_matiere`, `note_student`) VALUES ('$class_student', '$nom_student', '$nom_matiere', '$note_student')";

          // Exécuter la requête sur la base de données
          $res = mysqli_query($conn, $query);
          if($res){
            header("Location: Gradebook.php");
          }
      }else{

?>


<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
      <li><a href="../homeAdmin.php">Home</a></li>
    <li class="active">Gradebook</li>
  </ol>


<a data-toggle="modal" data-target="#new_bulletin" href="./admin/bulletin#" class="btn btn-warning btn-lg"><i class="fa fa-clipboard"></i> new bulletin</a>

<div class="modal fade bs-example-modal-lg" id="new_bulletin">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">new bulletin</h4>
      </div>
      <div class="modal-body">

      <div class="col-md-12">

<form method="POST" action="Gradebook.php" accept-charset="UTF-8" class="col-md-12" id="myForm">
<input name="_token" type="hidden" value="9g4ipjNErSON1N3c7z0WBpHJxpBzKc3MUc6CNhQ0">

<div class="row">

            <div class="col-md-12">
              <div class="form-group">
                    <label class="control-label">class  : </label>
                    <div class="input-group">
                      <span class="input-group-addon"><i class="glyphicon glyphicon-blackboard"></i></span>
                      <select name="class_student" id="class" class="form-control  input-lg">
                      <option value="">select</option>
                            <option value="SIXIEME">SIXIEME </option>
                            <option value="Cinquieme">Cinquieme</option>
                            <option value="Quatrieme">Quatrieme </option>
                            <option value="Troisieme">Troisieme</option>
                            <option value="Seconde">Seconde</option>
                            <option value="Premiere">Premiere</option>
                      </select>
                    </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group student">
                    <label class="control-label">student : </label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-mortar-board"></i></span>
                    <select name="nom_student" id="student" class="form-control input-lg">
                        <option value="">all students</option>
                        <option value="Desire Kotozafy">Desire Kotozafy </option>
                        <option value="Heritiana Vero">Heritiana Vero</option>
                        <option value="Fabien Alexis">Fabien Alexis</option>
                        <option value="Finaritra Sandra">Finaritra Sandra</option>
                    </select>
                    </div>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group subject">
                    <label class="control-label">subjects : </label>
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-book"></i></span>
                    <select name="nom_matiere" id="subject" class="form-control input-lg">
                        <option value="">select</option>
                        <option value="Physique - Chimie">Physique - Chimie</option>
                        <option value="Mathematiques">Mathematiques</option>
                        <option value="Sciences Naturelles">Sciences Naturelles</option>
                    </select>

                    </div>
                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                    <div class="help-block with-errors"></div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label class="control-label">mark : </label>
                  <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-sticky-note"></i></span>
                  <input placeholder="" class="form-control input-lg" required="required" name="note_student" type="text" value=""> 
                </div>

                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>

                </div>
              </div>

              <div class="col-md-12 margin-top-10">
                <input class="btn btn-info btn-block submit" type="submit" value="add"> 
              </div>
</div>
              


<script type="text/javascript">
/*
$(document).ready(function () { 

            $('#class').on('change',function(e){
            var class_id = e.target.value;

            $(".student").css ({"display":"block"});

            $.ajax({
            type: "GET",
            url: "./ajax-class?class_id="+class_id,
                success: function(data) {  

                    var subcat =  $('#student').empty();

                    subcat.append('<option value ="">all students</option>');

                    $.each(data,function(create,subcatObj){
                    var option = $('<option/>', {id:create, value:subcatObj});
                    subcat.append('<option value ="'+subcatObj+'">'+create+'</option>');
                    });

                }
            });


            $.ajax({
            type: "GET",
            url: "./ajax-subject?class_id="+class_id,
                success: function(data) {  

                    var subcat2 =  $('#subject').empty();

                    subcat2.append('<option value ="">select</option>');

                    $.each(data,function(create,subcatObj){
                    var option = $('<option/>', {id:create, value:subcatObj});
                    subcat2.append('<option value ="'+subcatObj+'">'+create+'</option>');
                    });

                }
            });


        });
});
*/
</script>


<div class="clear"></div><br>

        <div class="col-md-12">
          <div id="resultajax" class="center"></div>
        </div>

</form>

      </div>
     
        <div class="clear"></div><br>

<script type="text/javascript">
      
/*
  $("#myForm .submit").click (function(event){

          event.preventDefault();

          $('#resultajax').append('<img src="./images/loader.gif" alt="please wait ..." />');

          $('.b1').hide();

          $.ajax({
              type: 'POST',
              url: './admin/bulletin/store',
              data: $('#myForm').serialize(),

              success: function(data) {
                                
                  if(data == 'true') {   
                    $('#resultajax').html("<br><div class='alert alert-success center'><strong>added successfully</strong></div>");
                    $('.b1').show();
                  }

                  if(data == 'false') {
                    $('#resultajax').html("<br><div class='alert alert-danger center'><strong>Error! please try again </strong></div>");
                    $('.b1').show();
                  }

                  if(data == 'repeat') {
                    $('#resultajax').html("<br><div class='alert alert-danger center'><strong>Error! subject repeat.</strong></div>");
                    $('#myForm input.btn').show();
                  }
                                      
                }

          });
    

  });


          function refresh() {
            // to current URL
            window.location='./admin/bulletin';
          }
*/
</script>




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<?php } ?>
<div class="clear"></div><hr>

<!--Modal Student first-->

    <div class="table-responsive">
      <div class="modal fade" id="class-64">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student second -->

<div class="modal fade" id="class-65">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!--Modal Student Third -->

<div class="modal fade" id="class-66">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
          

 <div class="list-group">
  </div>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student fourth -->

<div class="modal fade" id="class-79">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student Fiveth -->

<div class="modal fade" id="class-82">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!--Modal Student Sixth -->

<div class="modal fade" id="class-83">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!--Modal Student Seventh -->

<div class="modal fade" id="class-87">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>


<!--Modal Student Eighth -->

<div class="modal fade" id="class-88">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student Nineth -->

<div class="modal fade" id="class-89">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student Tenth -->

<div class="modal fade" id="class-90">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     
 

 <div class="list-group">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div>



<!--Modal Student Eleventh -->

<div class="modal fade" id="class-91">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button onclick="refresh();" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title">students</h4>
      </div>
      <div class="modal-body">     


 <div class="list-group">
  </div>



</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->

</div>

<!-- #############################################Ending Modal Student#########################################-->


<table class="table table table-striped table-bordered">
        <thead>
          <tr class="tr">
            <th>class</th>
            <th>Gradebook</th>

          </tr>
        </thead>
        <tbody>


          <tr class="tr-body">

            <td>Quatrieme</td>

            <td>
              <button data-toggle="modal" data-target="#class-64" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>


   

<!-- /.modal -->




          <tr class="tr-body">

            <td>Cinquieme</td>

            <td>
              <button data-toggle="modal" data-target="#class-65" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>


   

<!-- /.modal -->




          <tr class="tr-body">

            <td>Troisieme</td>

            <td>
              <button data-toggle="modal" data-target="#class-66" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>


   

<!-- /.modal -->




          <tr class="tr-body">

            <td>Terminal</td>

            <td>
              <button data-toggle="modal" data-target="#class-79" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>


   

<!-- /.modal -->




          <tr class="tr-body">

            <td>Seconde</td>

            <td>
              <button data-toggle="modal" data-target="#class-82" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

          <tr class="tr-body">

            <td>SIXIEME A</td>

            <td>
              <button data-toggle="modal" data-target="#class-83" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>   

<!-- /.modal -->

          <tr class="tr-body">

            <td>Access Program </td>

            <td>
              <button data-toggle="modal" data-target="#class-87" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

          <tr class="tr-body">

            <td>Summer class</td>

            <td>
              <button data-toggle="modal" data-target="#class-88" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

          <tr class="tr-body">

            <td>mujtaba</td>

            <td>
              <button data-toggle="modal" data-target="#class-89" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

          <tr class="tr-body">

            <td>pl2 QHSE</td>

            <td>
              <button data-toggle="modal" data-target="#class-90" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

          <tr class="tr-body">

            <td>teminal</td>

            <td>
              <button data-toggle="modal" data-target="#class-91" class="btn btn-info">
                <i class="fa fa-file-text"></i> students
              </button>
            </td>

          </tr>

<!-- /.modal -->

        </tbody>
      </table>
    </div><!-- /.table-responsive -->

  </div>
</div>

</div>

     <script src="./Gradebook_files/bootstrap.min.js"></script>

     <script src="./Gradebook_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>

</body>
</html>