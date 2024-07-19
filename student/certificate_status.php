<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>
    <?php 
    if(isset($_GET['page_status'])){
        $page_status=$_GET['page_status'];
       

    
        if($page_status=='Pending')
        {

            ?>

       
    <div class="container">
        <table id="example" class="display table table-bordered" >
            <thead class="bg-dark text-light text-center">
                <tr>
                    <th>USN</th>
                    <th>Name</th>
                    <th>Certificate Name</th>
                    <th>Description</th>
                    <th>Grades</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     $qry="select * from certificate c,user u,student_allocation sa 
                   WHERE c.c_status='Pending' 
                   AND c.fk_student_id=u.id 
                   AND sa.fk_student_id=c.fk_student_id
                   AND sa.fk_staff_id='$staff_id'
                    ";
                
                    $exc=mysqli_query($conn,$qry);
                    $count=mysqli_affected_rows($conn);
                    if($count > 0){
                    while($row=mysqli_fetch_array($exc)){
                        ?>
                        <tr>
                    <td><?php echo $usn=$row['usn'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['c_name'] ?></td>
                    <td><?php echo $row['c_description'] ?></td>
                    <td><?php echo $row['c_marks'] ?></td>
                    <td><?php echo $row['c_status'] ?></td>

                    <td>
                        <a href="" class="text-success border-right border-dark p-1">Approve</a>
                        <a href="" class="text-danger">Reject</a>

                    </td>

                </tr>
                        <?php
                    }
                }

                ?>
                
            </tbody>

        </table>
    </div>
    <?php
        }
        elseif($page_status=='Approved')
        {
            ?>
 <div class="container">
        <table id="example" class="display table table-bordered" >
            <thead class="bg-dark text-light text-center">
                <tr>
                    <th>USN</th>
                    <th>Name</th>
                    <th>Certificate Name</th>
                    <th>Description</th>
                    <th>Grades</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
              
                     $qry="select * from certificate c,user u,student_allocation sa 
                   WHERE c.c_status='Approved' 
                   AND c.fk_student_id=u.id 
                   AND sa.fk_student_id=c.fk_student_id
                   AND sa.fk_staff_id='$staff_id'
                    ";
                
                    $exc=mysqli_query($conn,$qry);
                    $count=mysqli_affected_rows($conn);
                    if($count > 0){
                    while($row=mysqli_fetch_array($exc)){
                        ?>
                        <tr>
                    <td><?php echo $usn=$row['usn'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['c_name'] ?></td>
                    <td><?php echo $row['c_description'] ?></td>
                    <td><?php echo $row['c_marks'] ?></td>
                    <td><?php echo $row['c_status'] ?></td>

                    <td>
                       

                    </td>

                </tr>
                        <?php
                    }
                }
               

                ?>
                
            </tbody>

        </table>
    </div>


<?php

        }
        elseif($page_status=='Rejected')
        {
            ?>
 <div class="container">
        <table id="example" class="display table table-bordered" >
            <thead class="bg-dark text-light text-center">
                <tr>
                    <th>USN</th>
                    <th>Name</th>
                    <th>Certificate Name</th>
                    <th>Description</th>
                    <th>Grades</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
             
                     $qry="select * from certificate c,user u,student_allocation sa 
                   WHERE c.c_status='Rejected' 
                   AND c.fk_student_id=u.id 
                   AND sa.fk_student_id=c.fk_student_id
                   AND sa.fk_staff_id='$staff_id'
                    ";
                
                    $exc=mysqli_query($conn,$qry);
                    $count=mysqli_affected_rows($conn);
                    if($count > 0){
                    while($row=mysqli_fetch_array($exc)){
                        ?>
                        <tr>
                    <td><?php echo $usn=$row['usn'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['c_name'] ?></td>
                    <td><?php echo $row['c_description'] ?></td>
                    <td><?php echo $row['c_marks'] ?></td>
                    <td><?php echo $row['c_status'] ?></td>

                    <td>
                    
                    </td>

                </tr>
                        <?php
                    }
                }

                ?>
                
            </tbody>

        </table>
    </div>

<?php
        }
        else{
            echo "<p>Data not found</p>";
        }
    }
    else{
        echo "<p>Data not found</p>";
    }
       
    ?>



</div>
   
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
<?php 
    include "./footer.php";
?>