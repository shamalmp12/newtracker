<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>
    <div class="container col-5">
       <h2>Guide Details</h2>

       <table class="table table-bordered mt-5 bg-info text-light">
        <?php 
            $qry="select * from user u,student_allocation sa
                  WHERE u.id=sa.fk_staff_id
                  AND sa.fk_student_id='$student_id'
                  AND u.user_type='Faculty'";
                  $exc=mysqli_query($conn,$qry);
                  $count=mysqli_affected_rows($conn);
                    if($count==1){
                  while($row=mysqli_fetch_array($exc)){
                    ?>
                   
            <tr>
                <th>Name</th>
                <td><?php echo $row['name'] ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $row['email'] ?></td>

            </tr>
            <tr>
                <th>Phone</th>
                <td><?php echo $row['phone'] ?></td>

            </tr>
            <?php
                  }
                }
                else{
                    echo "<p class='mt-5 h4 text-danger'>Guide not allocated.</p>";
                }
        ?>
       </table>

    </div>
</div>
<?php 
    include "./footer.php";
?>