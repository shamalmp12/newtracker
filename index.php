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

    
	<!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"> -->
	<!-- <link rel="icon" href="images/favicon.ico" type="image/x-icon"> -->
</head>

<body style="overflow-x: hidden;">
<header id="myCarousel" class="carousel slide">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner">
		<div class="item active">
			<div class="fill" style="background-image:url('./assets/custome_css/images/1900x10801.png');"></div>
			<div class="carousel-caption">
				<a href="student_reg.php"><h2 style="color: white;">Register Today</h2></a>
			</div>
		</div>
		<div class="item">
			<div class="fill" style="background-image:url('./assets/custome_css/images/1900x10802.png');"></div>
			<div class="carousel-caption">
				<h2>Feed your Brain With Knowledge</h2>
			</div>
		</div>
		<!-- <div class="item">
			<div class="fill" style="background-image:url('images/1900x10803.png');"></div>
			<div class="carousel-caption">
				<a href="takeexam"><h2 style="color: white; ">Take Exam</h2>
              </div>
          </div> -->
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
				<a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
			
</header>

<div class="container" style="max-width: 1200px;">



    
	<!-- Marketing Icons Section -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">
                    Welcome to Certification Tracker
                </h1>
		
		</div>
		
		<!-- <div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-gift"></i> Abstraction</h4>
				</div>
				<div class="panel-body">
					<p>
					<ul style="list-style-type:disc">
						The ‘Quiz Application’ project developed to overcome the time consuming problem of manual system. It is a collection of number of different types of quizzes like English, Programming, Current affairs, General Knowledge etc. A user can access all of the quiz and can attempt the quiz. There will be limited number of questions and for each correct answer user will get a credit score. 						
					</ul>
					 </p>
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				
				<div class="panel-body">
					<p>
						User can see answers. There are many quiz applications available currently on internet. But there are few which provide better understanding between users and the application like, providing proper answers, uploading user questions as well as answer to it etc.   Apart from that in current system, checking the answer sheets after taking test, waste the examiners time, so this application will check the correct answer and save the examiner time and carry the examination in an effective manner. 	</p>
					<br>
					<br>
					<br>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h4><i class="fa fa-fw fa-gift"></i> Project Category and Methodology</h4>
				</div>
				<div class="panel-body">
					<p>
					<ul><li>Django Framework</li>
					<li>BOOTSTRAP</li>
					<li>CSS</li>
					<li>MYSQL</li>
					<br>
					<br>
					<br>
					<br>
					<br>
					</ul>
					 </p>
					
				</div>
			</div>
		</div> -->
	</div>
<header>
<!-- Navigation -->
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

</body>
</html>