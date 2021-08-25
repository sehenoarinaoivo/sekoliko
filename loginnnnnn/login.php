<!DOCTYPE html>
<!-- saved from url=(0037)./login -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="./images/favicon.png">
    <title> login </title>
    <link media="all" type="text/css" rel="stylesheet" href="./login_files/bootstrap.css">

    <link media="all" type="text/css" rel="stylesheet" href="./login_files/bootstrap-theme.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="./login_files/font-awesome.css">

    <link media="all" type="text/css" rel="stylesheet" href="./login_files/style.css">

    <!-- <script src="./login_files/jquery-1.11.3.min.js"></script> -->


        
    <style type="text/css"> .img-logo { padding-left: 18px; padding-right: 18px;} </style>
   
  </head>

<body style="background: #f2f2f2 url(&#39;img/bg.png&#39;);">

<div class="top-bar navbar">
<div class="container-fluid">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      
    </div> 

    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false">
        
         <ul class="nav navbar-nav contact-info navbar-left">         
          <li><i class="fa fa-envelope"></i> stage@project.net | </li>
          <li><i class="glyphicon glyphicon-phone"></i>  (+261) 342312033</li>
        </ul>


         <ul class="nav navbar-nav navbar-right">         
           
            <li class="center"><a href="login.php"><span class="glyphicon glyphicon-lock"></span> login</a></li>


          
        </ul>

        

    </div>

<style type="text/css">

.modal-lang ul { list-style: none; }  
.modal-lang ul li { display: inline; margin: 5px; }  

</style>

<!-- Modal -->
<div class="modal fade" id="LgModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
      </div>
      <div class="modal-body modal-lang">
    
      </div>
    </div>
  </div>
</div>  

</div>
</div>

<div class="clear"></div>



<div class="clear"></div>

<div class="navbar navbar-default" style="margin-bottom: 0px;">
<div class="container-fluid"> 
 
    <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="nav navbar-nav navbar-left">
          <a href="#"><img src="./login_files/logo.png" class="img-responsive img-logo" width="340px" alt=""></a>
        </div>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

     <ul class="nav navbar-nav navbar-right center" style="margin-top: 20px; margin-right: 10px;">       
      
              <li><a href="#">about us</a></li> 
       
      <li><a href="#">contact Us</a></li>
      </ul>
    </div>

</div>
</div>

<div class="clear"></div>


<div class="container-fluid">

    
      
<div class="container-fluid main" style="padding: 0px;">

<div class="clear"></div> 

<div class="col-md-6 col-md-offset-3">
  <div class="login">

  <div class="col-md-8 col-md-offset-2" style="padding: 20px 20px;">
    <a href="."><img src="./login_files/logo.png" class="img-responsive" alt=""></a>
  </div>
  <div class="clear"></div>




<div class="clear" style="margin-top: 20px;"></div>
      

    <form method="POST" action="./check" accept-charset="UTF-8" id="login">
      <input name="_token" type="hidden" value="mUQKW8oAetWaLDsdCzMjADssliY61YcDFWm63a5C">

    	     <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input class="form-control input-lg" id="username" name="username" type="text" value="">
                </div> 

            </div>

            <div class="form-group">
                <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input class="form-control input-lg" id="password" name="password" type="password" value="">
                </div> 
            </div>

            <div class="form-group panel-body center">
              <div class="col-md-3 m-b-5">
                <button type="button" class="btn1 btn btn-primary btn-lg btn-block">Administration</button>
              </div>
              <div class="col-md-3 m-b-5">
                <button type="button" class="btn2 btn btn-primary btn-lg btn-block">student</button>
              </div>
              <div class="col-md-3 m-b-5">
                <button type="button" class="btn3 btn btn-primary btn-lg btn-block">teacher</button>
              </div>
              <div class="col-md-3 m-b-5">
                <button type="button" class="btn4 btn btn-primary btn-lg btn-block">parents</button>
              </div>
            </div>  

<style type="text/css">.m-b-5 { margin-bottom: 5px; }</style>

<!-- <script type="text/javascript">
 $(document).ready(function () { 


  function admin(){
    $('#username').val('admin');
    $('#password').val('123456');
  }

  function student(){
    $('#username').val('student');
    $('#password').val('123456');
  }

  function teacher(){
    $('#username').val('teacher');
    $('#password').val('123456');
  }

  function parents(){
    $('#username').val('parent');
    $('#password').val('123456');
  }

   $(document).on('click', '.btn1', function(){ admin(); });
   $(document).on('click', '.btn2', function(){ student(); });
   $(document).on('click', '.btn3', function(){ teacher(); });
   $(document).on('click', '.btn4', function(){ parents(); });

});  
</script> -->
            <div class="form-group">
                <input name="remember" type="checkbox" value="remember">
                remember me
            </div>

            <div class="form-group">
                <input type="submit" value="connexion"> 
            </div>

            <div class="clear"></div>

            
            <div class="pull-left">
              <a href="index.php"><i class="fa fa-home"></i> Home</a>
            </div>

            <div class="pull-right">
              <a href="./password/reset">Forgot your password ?</a>
            </div>

    </form>

  </div>

</div>



<div class="clear" style="padding-bottom: 20px;"></div>

		  
</div>
    

</div>

     
     <!-- <script src="./login_files/bootstrap.min.js"></script> -->

     <!-- <script src="./login_files/validator.js"></script> -->



</body></html>