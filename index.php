<?php include("includes/header.php"); ?>

<?php if(!$session->is_signed_in()) {redirect("login.php") ;}  ?>


<div class="row">

    <!-- Blog Entries Column -->
    <div class="col-md-8">






    </div>




    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">


     <?php include("includes/sidebar.php"); ?>



</div>
<!-- /.row -->

<?php include("includes/footer.php"); ?>
