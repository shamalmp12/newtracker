<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>
    <div class="container">
            <div class=" m-1">  
                <a href="./view_certificate_details.php"> <button type="submit"  class="btn btn-primary" style="margin-left: 1000px;">View Certificate</button></a>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: #7386D5;; color: #fff;">
                <h3>Add Certificate</h3>
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data" >
                    <div class="row mt-2">
                            <div class="col-6">
                                <div class=""form-group>
                                    <label for="">Certificate Number</label>
                                    <input type="text" class="form-control" placeholder="Certificate Number" name="c_number" required>
                                </div>
                            </div>
                            <div class="col--6">
                                <div class="form-group">
                                    <label for="">Issue Date</label>

                                    <input type="date" placeholder="c_issue_date" class="form-control" name="c_issue_date" required>
                                </div>
                            </div> 
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class=""form-group>
                                <label for="">Certificate Name</label>

                                    <input type="text" class="form-control" placeholder="Name" name="c_name" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                <label for="">Category</label>

                                    <select name="c_category" id="" class="form-control">
                                        <option value="#"  selected disabled>Select Category?</option>
                                        <?php
                                            $qry="select * from category";
                                            $exc=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_array($exc)){
                                                ?>
                                                <option value="<?php echo $row['id'] ?>"><?php echo $row['cat_name'] ?></option>
                                                <?php
                                            }
                                        ?>
                                        
                                    </select>
                                </div>
                            </div> 
                        </div>
                    
                        <div class="row mt-2">
                            <div class="col-6">
                                <div class=""form-group>
                                <label for="">Grades</label>

                                    <input type="text" class="form-control" placeholder="Marks,Grades" name="c_grade" required>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="" >Certificate Document</label>
                                    <input type="file" class="form-control" name="c_file" required>
                                </div>
                            </div> 
                        </div>
                        <div class="row mt-2">
                            <div class="col-sm-12">
                                <div class=""form-group>
                                    <textarea name="c_description" id="" cols="30" rows="3" placeholder="Description" class="form-control"></textarea>
                                </div>
                            </div>
                            
                        </div>
                        
                        <div class="form-group offset-5 mt-2">
                            <button class="btn btn-primary " name="save">Submit</button>
                           
                        </div>   
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>
<?php

        if (isset($_POST['save'])){
            $c_number=$_POST['c_number'];
            $c_issue_date=$_POST['c_issue_date'];
            $c_name=$_POST['c_name'];
            $c_category=$_POST['c_category'];
            $c_grade=$_POST['c_grade'];
            $c_description=$_POST['c_description'];
            $c_status="Pending";

                // file upload start 
                $c_file=$_FILES['c_file'];
                $c_file_name=$_FILES["c_file"]["name"];
                $tm=md5(time());
                $dst_file_path="../assets/student_certificates/".$student_id;

                if(!is_dir($dst_file_path)){
                    mkdir($dst_file_path);
                }
                $dst=$dst_file_path."/".$tm.$c_file_name;
                $file_status=move_uploaded_file($_FILES["c_file"]["tmp_name"],$dst);
            if($file_status){
                 $qry="INSERT INTO `certificate`(`certificate_id`, `fk_cat_id`, `c_name`, `c_marks`, `c_description`, `fk_student_id`, `c_status`, `c_issue_date`, `photo`) VALUES ('$c_number','$c_category','$c_name','$c_grade','$c_description','$student_id','$c_status','$c_issue_date','$dst')";
                 $exc=mysqli_query($conn,$qry);
                 if($exc){
                    echo "<script>alert('New certificate Added..')
                            location='view_certificate_details.php'
                        </script>";
                 }
                 else{
                    echo "err";
                 }
            }
           

        }
?>
<?php 
    include "./footer.php";
?>