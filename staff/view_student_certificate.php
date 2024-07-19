<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>

    <div class="container">
   <?php
    if(!isset($_GET['student_id'])){
        header("location:./view_student.php");
    }
    $student_id=$_GET['student_id'];
    $qry="select * from user where id='$student_id'";
    $exc=mysqli_query($conn,$qry);
    while($row=mysqli_fetch_array($exc)){
        $student_name=$row['name'];
        $email=$row['email'];
        $usn=$row['usn'];


    }
   ?>
       <h3><?php echo "<span class='text-primary h1'>".$student_name ?>'s</span> Details</h3>
  



           <table id="" class="table table-bordered " >
               <thead style="background-color: #7386D5; color: #fff;" class="text-center">
                   <tr class="text-center">
                      
                       <th>USN</th>
             
                       <th>Email</th>
                      
                   </tr>
               </thead>
               <tbody class="text-center">
          
               
                   <tr class="text-center">
              
                       <td><?php echo $usn ?></td>
                      
                       <td><?php echo $email?></td>
                             
                       
                   </tr>
                
                </tbody>  
           </table>









        <h1 class="mt-5 text-center">Certificates</h1>


           <table id="example" class="display " >
               <thead style="background-color: #7386D5; color: #fff;">
                   <tr>
                       <th>Number</th>
                       <th>Name</th>
                       <th>Category</th>
                       <th>Issue Date</th>
                       <th>Grade</th>
                       <th>Status</th>
                       <th>Certificate</th>
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody>
                <?php
                $i=1;
                    $qry="select *,certificate.id as c_id from certificate,category where fk_student_id='$student_id'
                    AND certificate.fk_cat_id=category.id";
                    $exc=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_array($exc)){
                        $c_id=$row['c_id'];
                        if($row['c_status']=="Pending"){
                            $status="<p class='text-info'>Pending</p>";
                        }
                        elseif($row['c_status']=="Approved")
                        {
                            $status="<p class='text-success'>Approved</p>";
                        }
                        elseif($row['c_status']=="Rejected")
                        {
                            $status="<p class='text-danger'>Rejected</p>";
                        }
                        ?>

                   <tr class="text-center">
                       <td><?php echo $row['certificate_id'] ?></td>
                       <td><?php echo $row['c_name'] ?></td>
                       <td><?php echo $row['cat_name'] ?></td>
                       <td><?php echo $row['c_issue_date'] ?></td>

                       <td><?php echo $row['c_marks'] ?></td>
                       <td><?php echo $status ?></td>

                       
                       <td>
                            <a href="<?php echo $row['photo'] ?>" download><i class="fa fa-download"></i></a>
                       </td>
                      
                        <td>
                        <?php
                        if ($row['c_status'] =='Pending'){
                            ?>
                           <a href="./approve_reject_certificate.php?c_id=<?php echo $c_id ?>&c_status=Approved&student_id=<?php echo $student_id ?>" class="text-success mr-2 h5 border-right p-2 border-right-dark"><i class="fa fa-check"></i></a> 

                           <a href="./approve_reject_certificate.php?c_id=<?php echo $c_id ?>&c_status=Rejected&student_id=<?php echo $student_id ?>" class="text-danger h5"><i class="fa fa-trash"></i></a> 
                           <?php } ?>          
                       </td>
                       
                       
                       
                   </tr>
                   <?php
                    }
                ?>
                </tbody>  
           </table>
    </div>
</div>

<?php 
    include "./footer.php";
?>
<script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
    </script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.css"/>
     
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script> 