<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>

    <div class="container">
   
       <h2>Allocated Student Details</h2>
  



           <table id="example" class="display " >
               <thead style="background-color: #7386D5; color: #fff;" class="text-center">
                   <tr class="text-center">
                       <th>Sl no.</th>
                       <th>USN</th>
                       <th>Name</th>
                       <th>Email</th>
                       <th>Total Certificate</th>
                      
                       <th>Action</th>
                   </tr>
               </thead>
               <tbody class="text-center">
                <?php
                $i=1;
                 $qry="select * from user u,student_allocation s 
                WHERE u.id=s.fk_student_id
                AND s.fk_staff_id='$staff_id'
                AND u.user_type='Student'";
                    $exc=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_array($exc)){
                   ?>
                   <tr class="text-center">
                    <td><?php echo $i++;
                    $student_id=$row['fk_student_id'] ?></td>
                       <td><?php echo $row['usn'] ?></td>
                       <td><?php echo $row['name'] ?></td>
                       <td><?php echo $row['email'] ?></td>
                       <td>
                            <?php
                                $qry2="select count(id) as total_student_certificate from certificate where fk_student_id = '$student_id'";
                                $exc2=mysqli_query($conn,$qry2);
                                while($row2=mysqli_fetch_array($exc2)){
                                    echo $total_certificate=$row2['total_student_certificate'];
                                }
                            ?>
                       </td>
                       <td><a href="./view_student_certificate.php?student_id=<?php echo $student_id ?>" class="btn btn-primary">Certificates</a></td>            
                       
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