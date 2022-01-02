<?php include("include/db.php");?>
<?php include ("include/header.php"); ?>

    <!-- Navigation -->
   
    <?php include ("include/navigation.php"); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <h1 class="page-header">
                    Page Heading
                    <small>Secondary Text</small>
                </h1>

                <!-- First Blog Post -->
<?php
$query = "SELECT * FROM posts ";
$select_all_categories_query = mysqli_query($connection, $query);
while($row = mysqli_fetch_assoc($select_all_categories_query)){
   $post_title = $row['post_title'];
   $post_author = $row['post_author'];
   $post_date = $row['post_date'];
   $post_image = $row['post_image'];
   $post_content = $row['post_content'];
?>
<h2>
<a href="#"><?php echo $post_title ?></a>
</h2>
<p class="lead">
by <a href="index.php"><?php echo $post_author ?></a>
</p>
<p><span class="glyphicon glyphicon-time"></span><?php echo $post_date ?></p>
<hr>
<img class="img-responsive" src="images/<?php echo $post_image ?>" alt="images" width="600px" height="1000px" 
<hr/>
<p><?php echo $post_content ?></p>
<a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

<hr>
<?php
}
?>

                <!-- Second Blog Post -->
               
               

            </div>

            <!-- Blog Sidebar Widgets Column -->
            <?php include ("include/sidebar.php") ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
      <?php include ("include/footer.php") ?>
    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
