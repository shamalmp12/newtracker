<?php 
    include "./left_nav.php";
    
?>
<div id="content">
    <?php  include "./top_nav.php"; ?>
    
    <div class="container">
        <div class="row">
            <div class="col-3 bg-info text-light p-3">
                <h5>Total Certificate</h5>
                <?php
                    $qry="select count(id) as total_certificate from certificate where fk_student_id = '$student_id'";
                    $exc=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_array($exc)){
                        $total_certificate=$row['total_certificate'];
                    }
                ?>
                <h1 class="float-right"><?php echo $total_certificate ?></h1>
            </div>
        </div>
    </div>
</div>
<?php 
    include "./footer.php";
?>