<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>

    <div class="container">
   
       <h2>Certificate Details</h2>
       <a href="./add_certificate.php" class="btn btn-dark float-right mb-2">Add new </a>



           <table id="example" class="display " >
               <thead style="background-color: #7386D5; color: #fff;">
                   <tr class="text-center">
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
                        if ($row['c_status'] =='Pending' || $row['c_status'] =='Rejected' ){
                            ?>
                           <a href="./view_certificate_details.php?c_id=<?php echo $c_id ?>" class="text-danger"><i class="fa fa-trash"></i></a> 
                           <?php } ?>          
                       </td>
                       
                       
                       
                   </tr>
                   <?php
                    }
                ?>
                </tbody>  
           </table>

           <?php 

                    //delete
                    if(isset($_GET['c_id'])){
                        echo $c_id=$_GET['c_id'];
                        $qry="DELETE FROM `certificate` WHERE id='$c_id'";
                        $exc=mysqli_query($conn,$qry);
                        if($exc){
                            echo "<script>alert('Deleted.');
                            location='view_certificate_details.php'</script>";
                        }
                        else{
                            echo "err";
                        }
                    }
?>

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