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
<div class="container">

	<div class="row">
		<div class="col-md-5">
			<!-- Stdeunt login page -->
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp; Login</h3>
				</legend>
				<form name="studentlogin" method="POST">
					
					<div class="control-group form-group">
						<div class="controls">
							<label>Email:</label>
							<input type="email" class="form-control" name="email" required>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="password" required>
							<p class="help-block"></p>
						</div>
					</div>
                    <div class="control-group form-group">
                    <div class="controls">
                        <label> Who you are?: <span style="color: #ff0000;">*</span></label>
                        <select name="user_type" id="" class="form-control">
                            <option value="#"  selected disabled>Select who you are?</option>
                            <option value="Student">Student</option>
                            <option value="Faculty">Faculty</option>
                            <option value="Admin">Admin</option>

                        </select>
                        
                    </div>
                </div>
					<center>
						<button type="submit" name="login" class="btn btn-primary">Login</button>
						<button type="reset" class="btn btn-primary" style="background-color: #E52727;border-color: #D21B1B;">Reset</button>
					</center>
			</fieldset>
			</form>
            <?php 
            session_start();
                if(isset($_POST['login'])){
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $user_type=$_POST['user_type'];
                    if ($user_type=="Student"){
                        $qry="select * from user WHERE email='$email'
                                AND password='$password' AND user_type='$user_type'";
                        $exc=mysqli_query($conn,$qry);
                        $count=mysqli_affected_rows($conn);
                        if($count == 1){
                            $_SESSION['email']=$email;
                            
                            echo "<script>
                            location='./student/index.php'</script>";
                        }
                        else{
                            echo "<script>alert('Email/Password wrong.')
                            location='./user_login.php'</script>";
                        }

                    }
                    elseif($user_type=="Faculty"){
                        $qry="select * from user WHERE email='$email'
                        AND password='$password' AND user_type='$user_type'";
                        $exc=mysqli_query($conn,$qry);
                        $count=mysqli_affected_rows($conn);
                        if($count == 1){
                            $_SESSION['email']=$email;
                            echo "<script>
                            location='./staff/index.php'</script>";
                        }
                        else{
                            echo "<script>alert('Email/Password wrong.')
                            location='./user_login.php'</script>";
                        }
                    }
                    elseif($user_type=="Admin"){
                        $qry="select * from user WHERE email='$email'
                                AND password='$password' AND user_type='$user_type'";
                        $exc=mysqli_query($conn,$qry);
                        $count=mysqli_affected_rows($conn);
                        if($count == 1){
                            $_SESSION['email']=$email;
                            
                            echo "<script>
                            location='./admin/index.php'</script>";
                        }
                        else{
                            echo "<script>alert('Email/Password wrong.')
                            location='./admin/index.php'</script>";
                        }
                    }
                }
            ?>
	
		</div>
	</div>
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
   
</header>
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
</html>