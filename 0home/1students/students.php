<!DOCTYPE html>
<!-- saved from url=(0046)./admin/students -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="icon" href="/images/favicon.png">
    <title> students </title>

    <link media="all" type="text/css" rel="stylesheet" href="students_files/bootstrap.css">

    <link rel="stylesheet" href="../fontawesome/css/all.css">

    <link media="all" type="text/css" rel="stylesheet" href="students_files/bootstrap-theme.min.css">
    <!-- students_files -->
    <!-- <link media="all" type="text/css" rel="stylesheet" href="students_files/font-awesome.css"> -->

    <script src="students_files/jquery-1.11.3.min.js"></script>

    <link media="all" type="text/css" rel="stylesheet" href="students_files/style.css">
       
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
              <a href="#"><img src="./students_files/logo.png" class="img-responsive img-logo" width="210px" alt=""></a>
             </div>

            <div class="collapse navbar-collapse">   

               <ul class="navbar-right">
                <li><a class="btn btn-danger btn-sm" href="../../index.php" style="font-size:12px;">logout <i class="fas fa-sign-out-alt"></i></a></li>
              </ul>

            </div>
        </div>

    </div>


<div class="clear"></div>

<div class="container-fluid">

<link media="all" type="text/css" rel="stylesheet" href="./students_files/datatables.min.css">

<script src="./students_files/datatables.min.js"></script>


  <script src="./students_files/en.js"></script>



<div class="panel panel-default panel-main">
  <div class="panel-body">
    
  <ol class="breadcrumb">
    <li><a href="../homeAdmin.php">Home</a></li>
    <li class="active">students</li>
  </ol>

<a href="Nouvel_etudiant.php" class="btn btn-warning btn-lg"><i class="fa fa-user-plus"></i> new student</a>

<div class="clear"></div><hr>

<div class="clear"></div>


<div class="table-responsive">
       <div id="example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
         <div class="row"><div class="col-sm-6">
         <div class="dataTables_length" id="example_length"><label>Show 
           <select name="example_length" aria-controls="example" class="form-control input-sm">
             <option value="10">10</option><option value="25">25</option><option value="50">50</option>
             <option value="100">100</option>
            </select> entries</label></div></div>
            <div class="col-sm-6">
              <div id="example_filter" class="dataTables_filter">
                <label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example"></label>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-12">
              <table id="example" class="table table table-striped table-bordered display dataTable no-footer" style="width:100%" role="grid" aria-describedby="example_info">
          <thead>

          <tr role="row">

            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 84px;">#</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Full name: activate to sort column ascending" style="width: 181px;">Full name</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="class: activate to sort column ascending" style="width: 153px;">Class</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="profile: activate to sort column ascending" style="width: 90px;">Profile</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="guardian: activate to sort column ascending" style="width: 117px;">Parents</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="contact: activate to sort column ascending" style="width: 102px;">contact</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Gradebook: activate to sort column ascending" style="width: 134px;">Gradebook</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 115px;">#</th>

          </tr>

        </thead>

        <tbody>


         <?php  

          include("../config_PDO.php");   //connection bdd

          $ins = $base->prepare("SELECT * FROM `eleve`");
          $ins->execute();

          //inserer image dans variable get_user_image
          $get_user_image = $base->prepare('SELECT images FROM eleve WHERE id = ?');
          
          //Boucle Parcourir Table eleve:
          while($result=$ins->fetch()){

            $get_user_image->execute(array(
              $result['id']
            ));
            $user_image = $get_user_image->fetch()[0];

            //Testons s'il a une image ou pas !!...
            if($user_image == "") {
              $user_image = "students_files/student.png";
            }
          ?>
          <tr class="tr-body odd" role="row">

            <td class="sorting_1"><?php $result['id']?>


            <img src="<?php echo $user_image ?>" class="img-circle" width="60px" height="60px" alt="">
            </td>
            <td><?php echo $result['nom_prenom'] ?></td>
            <td> <?php echo $result['class']?> </td>
            <td>
              <a href="profile.php?id=<?php echo $result['id'] ?>">
                <i class="fas fa-user-graduate" title="profile"></i>
              </a>
            </td>
            <td>
              <a href="/admin/parent/3/profile">

                <i class="fa fa-eye"></i>
            </a>
            </td>

            <td>
              <a href="/conversation"><i class="fa fa-envelope" title="message" aria-hidden="true"></i></a>
            </td>
            <td> 
              <a href="/admin/bulletin/student/142"><i class="fa fa-file"></i></a>
            </td>
            <td>
              <a class="btn btn-success" href="student_edit.php?id_update=<?php echo $result['id'] ?>"><i class="fa fa-edit"></i></a>
              <a class="btn btn-danger" onclick="return confirm(&#39;delete&#39;)" href="/admin/student/142/delete">
              <i class="fa fa-trash"></i>
              </a>
            </td>

          </tr>
          <?php } ?>

          <tr role="row">

            <th class="sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="#: activate to sort column descending" style="width: 84px;">#</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Full name: activate to sort column ascending" style="width: 181px;">Full name</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="class: activate to sort column ascending" style="width: 153px;">Class</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="profile: activate to sort column ascending" style="width: 90px;">Profile</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="guardian: activate to sort column ascending" style="width: 117px;">Parents</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="contact: activate to sort column ascending" style="width: 102px;">contact</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="Gradebook: activate to sort column ascending" style="width: 134px;">Gradebook</th>
            <th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-label="#: activate to sort column ascending" style="width: 115px;">#</th>

          </tr>

        </tbody>

      </table>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 4 of 4 entries</div>
    </div>
    <div class="col-sm-7">
      <div class="dataTables_paginate paging_simple_numbers" id="example_paginate">
        <ul class="pagination">
          <li class="paginate_button previous disabled" id="example_previous">
            <a href="./admin/students#" aria-controls="example" data-dt-idx="0" tabindex="0">Previous</a>
          </li>
          <li class="paginate_button active">
            <a href="./admin/students#" aria-controls="example" data-dt-idx="1" tabindex="0">1</a>
          </li>
          <li class="paginate_button next disabled" id="example_next">
            <a href="./admin/students#" aria-controls="example" data-dt-idx="2" tabindex="0">Next</a>
          </li>
  </ul>
</div>
</div>
</div>
</div>
    </div>
    <!-- /.table-responsive -->




  </div>
</div>



</div>


     
     <script src="students_files/bootstrap.min.js"></script>

     <script src="students_files/validator.js"></script>

     <script src="../fontawesome/js/all.js"></script>


    

</body></html>