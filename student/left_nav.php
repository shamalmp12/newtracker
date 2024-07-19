<?php 
        include "../dbconn.php";
        session_start();
        if(!isset($_SESSION['email'])){
            header("location:../index.php");

        }
        else{
            $email=$_SESSION['email'];
            $qry="select * from user where email='$email'";
            $exc=mysqli_query($conn,$qry);
            while($row=mysqli_fetch_array($exc)){
                $student_id=$row['id'];
            }
        }
    ?>  
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Student</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="../assets/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>
                    STUDENT
                </h3>
                <strong>CT</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="./index.php"  >
                    <i class="fas fa-home"></i>
                       
                        Dashboard
                    </a>
                   
                </li>
                <li class="active">
                    <a href="./view_certificate_details.php"  >
                    <i class="fas fa-certificate"></i>
                        Certificate
                    </a>
                   
                </li>
                <li class="active">
                    <a href="./view_guide.php"  >
                    <i class="fas fa-user"></i>
                        About Guide
                    </a>
                   
                </li>
          
                <!-- <li>
                    <a href="./change_password.php">
                        <i class="fas fa-bell"></i>
                        Change Password
                    </a>
                </li> -->
                
            </ul>

            
        </nav>

        
   

  