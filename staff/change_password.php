<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>
    <div class="container">
            <div class=" m-2">  
                
            </div>
            <div class="card">
                <div class="card-header" style="background-color: #7386D5;; color: #fff;">
                <h3>Change Password</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" >
                        
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <div class=""form-group>
                                    <label for="">Current Password</label>
                                    <input type="password" class="form-control" placeholder="*****" name="c_pass" required>
                                </div>
                                <div class="form-group mt-2">
                                <label for="">New Password</label>
                                    <input type="password" class="form-control" placeholder="*****" name="n_pass" required>
                                </div>
                                <div class="form-group ">
                                    <button class="btn btn-primary " name="add">Change Password</button>
                                    
                                </div>  
                            </div>
                           
                        </div>
                    
                        
                         
                    </form>
                </div>
            </div>
        </div> 
        <?php 
            if (isset($_POST['add'])){
                $c_pass=$_POST['c_pass'];
                $n_pass=$_POST['n_pass'];

                $old_password_match_qry="select * from user where password='$c_pass' AND id='$staff_id'";
                $old_pass_exc=mysqli_query($conn,$old_password_match_qry);
                $count=mysqli_affected_rows($conn);
                if($count==1){
                   $update_pass_qry="update user set password='$n_pass' where id='$staff_id'";
                   $update_pass_exc=mysqli_query($conn,$update_pass_qry);
                   if($update_pass_exc){
                    echo "<script>
                        alert('Password updated.Please Login again');
                        location='../user_login.php'
                    </script>";
                   }
                }
                else{
                    echo "<script>
                        alert('Your old password is wrong.');
                        location=location
                    </script>";

                }
                
                // $qry="INSERT INTO `user`(`email`, `password`, `user_type`,  `name`, `phone`) VALUES('$email','$password','$user_type','$name','$phone')";
                // $exc=mysqli_query($conn,$qry);
                // if($exc){
                //     echo "<script>
                //         alert('Added.');
                //         location='./view_staff.php'
                //     </script>";

                // }

            }
        ?>
    </div>
</div>
<?php 
    include "./footer.php";
?>