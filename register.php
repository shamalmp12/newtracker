    <?php 
        include "./dbconn.php";
    ?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>certification tracker</title>

    <!-- Bootstrap Core CSS -->
    <link href=" ./assets/custome_css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./assets/custome_css/css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="./assets/custome_css/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <div class="container" style="max-width: 1200px;">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Certification Tracker</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <!-- <li>
                        <a href="{% url 'about' %}">About</a>
                    </li> -->
					<li>
                        <a href="register.php">Registration</a>
                    </li>
                    <li>
                        <a href="user_login.php">Login</a>
                    </li>
					
                    
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<div class="row">
    <div class="col-md-12">
        <form name="register"  method="POST" >
            
            <fieldset>
                <legend>
                    <h3 style="padding-top: 25px;">Student Registration Form </h3>
                </legend>
               
                <div class="control-group form-group">
                    <div class="controls">
                        <label> Name: <span style="color: #ff0000;">*</span></label>
                        <input type="text" class="form-control" name="name" id="name" maxlength="30" pattern="[a-z,A-Z]{1,50}" required>
                        
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>USN: <span style="color: #ff0000;">*</span></label>
                        <input type="text" class="form-control" name="usn" id="usn" required >
                        
                    </div>
                </div>
        
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email: <span style="color: #ff0000;">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" required>
                        
                    </div>
                </div>


                <div class="control-group form-group">
                    <div class="controls">
                        <label>Password: <span style="color: #ff0000;">*</span></label>
                        <input type="password" class="form-control" name="password" id="password" maxlength="10"> <span style="color: #ff0000;" required></span>
                        <p class="help-block"></p>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Register</button>
                <button type="reset" name="reset" class="btn btn-danger">Clear</button>


            </fieldset>
        </form>
        
    </div>
</div>
<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $usn=$_POST['usn'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $user_type="Student";
        $status="0" ;


        $qry="select usn,email from user
                WHERE usn='$usn' OR email='$email'";
        $exc=mysqli_query($conn,$qry);
        $count=mysqli_affected_rows($conn);
      

        if($count==0){
            //Register
            $qry="INSERT INTO `user`( `email`, `password`, `user_type`, `usn`, `name`, `status`) VALUES('$email','$password','$user_type','$usn','$name','$status')";
            $exc=mysqli_query($conn,$qry);
            if($exc){
                echo "<script>alert('Student account created.')
                location='./user_login.php'</script>";
            }
            
        }else{
            echo "<script>alert('Student with this Email/USN already exist.')
            location=location</script>";
        }

    }
?>
<br>

</div>
<!-- Header Carousel -->
	<hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p class="footer text-center">Copyright &copy; Certification Tracker 2023  <strong>MCA</strong> project </p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
<style>
.footer{background: #000; padding: 10px 0px; color: #fff;position: fixed;left: 0; right: 0;bottom: -10px;}
</style>
    <!-- jQuery -->
    <script src="./assets/custome_css/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="./assets/custome_css/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
</html>