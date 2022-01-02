<?php include("include/navbar.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include('include/sidebar.php'); ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN PAGE !!!
                            <small>post tables are ...</small>
                        </h1>
                       <?php
                       if(isset($_GET['source'])){

                        $source = $_GET['source'];
                       }
                       else{
                           $source = "";
                       }
                       switch($source){
                        case 'addposts';
                       include "addposts.php";
                       break;
                       case 'edit_post';
                       include "edit_post.php";
                    break;
                    default:
                    include "viewAllPost.php";
                break;




                       }
                       
                       
                       
                       
                       
                       
                       
                       ?>








                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>