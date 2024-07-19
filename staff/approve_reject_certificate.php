<?php      include "./left_nav.php";
 ?>

<?php 

                    if(isset($_GET['c_id'])){
                        $c_id=$_GET['c_id'];
                        $c_status=$_GET['c_status'];
                        $student_id=$_GET['student_id'];


                        $qry="UPDATE `certificate` SET c_status='$c_status' where id='$c_id'";
                        $exc=mysqli_query($conn,$qry);
                        if($exc) {
                           
                            
                            echo "<script>alert(' $c_status')
                        location='view_student_certificate.php?student_id=$student_id'
                    </script>";
                    }
                    else{
                        echo "err";
                    }
                                

                            }
?>