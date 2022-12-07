<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Exams</title>
    <!-- CSS only -->
        <link rel="stylesheet" href="main.css">
            <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <?php if(@$_GET['w'])
        {echo'<script>alert("'.@$_GET['w'].'");</script>';}
        ?>
        <script>
        function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["year"].value;if (z == null || z == "") {alert("year must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
        var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
        var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
        </script>
  
    </head>

    <body>
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" data-toggle="modal" data-target="#modalreg" href="#">Register</a>
        </li>
        <br>
        <li class="nav-item">
          <a class="nav-link active" href="#" data-toggle="modal" data-target="#login">Admin Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div class="bg">
            <div class="row m-4 p-3">
                <div class="col-lg-6">
                    <span><h1>Angelicum S.High Online Exams</h1></span>
                    <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                    <fieldset>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input id="email" name="email" placeholder="Email" class="form-control input-md" type="email">
                            
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Login</button>
                        <hr>
                        <div>Not yet a user? <a href="#" data-toggle="modal" data-target="#modalreg">Register</a></div>
                    </fieldset>
                    </form>

                </div>
            </div>
        </div>


        <div class="modal" id="modalreg">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <p class="text-center"><b>Register</b></p>
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form class="form-horizontal" name="form" action="register.php?q=account.php" onSubmit="return validateForm()" method="POST">
                <fieldset>
                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="name"></label>  
                <div class="col-md-12">
                <input id="name" name="name" placeholder="Fullname" class="form-control input-md" type="text">
                    
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="gender"></label>
                <div class="col-md-12">
                    <select id="gender" name="gender" placeholder="Gender" class="form-control input-md" >
                <option value="Male">Select Gender</option>
                <option value="M">Male</option>
                <option value="F">Female</option> </select>
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="name"></label>  
                <div class="col-md-12">
                <input id="year" name="year" placeholder="Year" class="form-control input-md" type="text">
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="name"></label>  
                <div class="col-md-12">
                <input id="section" name="section" placeholder="Section" class="form-control input-md" type="text">
                </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label title1" for="email"></label>
                <div class="col-md-12">
                    <input id="email" name="email" placeholder="Email ID" class="form-control input-md" type="email">
                    
                </div>
                </div>

                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="mob"></label>  
                <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Contact Number" class="form-control input-md" type="number">
                    
                </div>
                </div>


                <!-- Text input-->
                <div class="form-group">
                <label class="col-md-12 control-label" for="password"></label>
                <div class="col-md-12">
                    <input id="password" name="password" placeholder="Password" class="form-control input-md" type="password">
                    
                </div>
                </div>

                <div class="form-group">
                <label class="col-md-12control-label" for="cpassword"></label>
                <div class="col-md-12">
                    <input id="cpassword" name="cpassword" placeholder="Confirmation Password" class="form-control input-md" type="password">
                    
                </div>
                </div>
                <?php if(@$_GET['q7'])
                { echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}?>
                <!-- Button -->
                <div class="form-group">
                <label class="col-md-12 control-label" for=""></label>
                <div class="col-md-12"> 
                    <input  type="submit" class="sub btn btn-danger" value="Register"/>
                </div>
                </div>

                </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>

        <div class="modal fade" id="login">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title"><span style="color:black;font-family:'typo' "><center>ADMIN LOGIN</center></span></h4>
      </div>
      <div class="modal-body title1">
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
<form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group">
<input type="text" name="uname" maxlength="20"  placeholder="Admin Email" class="form-control"/> 
</div>
<div class="form-group">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" style="border-radius:0%" />
</div>
</form>
</div><div class="col-md-3"></div></div>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!--footer end-->

       
    </body>
</html>