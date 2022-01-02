<?php include("include/navbar.php"); ?>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
           <?php include('include/sidebar.php'); ?>
           <?php
           $query = "SELECT * FROM categories ";
            $select_all_categories_query = mysqli_query($connection, $query);
           ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            WELCOME TO ADMIN PAGE !!!
                            <small>create the source .</small>
                        </h1>
                     
                          <div class="col-xs-6">
                        <form action=""method="post">
                        <div class="form-group">
                        <label for="cat-title">Add categories</label>
                        <input type="text" name="cat_title" class="form-control"><br/>
                        <input type="submit"name="submit"class="btn btn-primary" value="Add category">
                        <?php if(!$connection){echo " not connected";} ?>
                        </div>
                        </form>
                       
                        <form action=""method="post">
                        <div class="form-group">
                        
                        <?php 
                        if(isset($_GET['edit'])){
                            $cat_id = $_GET['edit'];
                        $query = "SELECT * FROM categories WHERE cat_id = $cat_id ";
                        $select_categories_id = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($select_categories_id)){
                            $cat_id = $row['cat_id'];
                            $cat_title = $row['cat_title'];
                            ?>
                          <label for="cat-title">update categories</label>
                          <input  type='text' value="<?php if(isset($cat_title)) {echo $cat_title;}     ?>" name='cat_title'  class='form-control'><br/>
                          <input type="submit"name="update_category"class="btn btn-primary" value="update category">
                       <?php } }?> 
                       
                        
                        <?php
                        if(isset($_POST['update_category'])){
                            $the_cat_title = $_POST['cat_title'];
                        $query= "UPDATE `categories`SET cat_title = '{$the_cat_title}' WHERE cat_id = {$cat_id}";
                        $update_query = mysqli_query($connection,$query);
                        header("Location:category.php");
                        if(!$update_query){
                            die(mysqli_error($connection)); 
                        }
            
            
                        }
                          
                        
                        ?>
                        <?php
                        if(isset($_GET['edit'])){
                         $cat_id = $_GET['edit'];
                        }
                        
                        
                        
                        
                        ?>
                        
                        
                        
                        <?php if(!$connection){echo " not connected";} ?>
                        </div>
                        </form>
                        

                        <?php
                        if(isset($_POST['submit'])){
                        $cat_title = $_POST['cat_title'];
                            if($cat_title == "" || empty($cat_title)){
                                echo "filled the box first";
                            }
                            else{
                                $query = "INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES (NULL, '$cat_title')";
                                $cat_query = mysqli_query($connection,$query);
                                if(!$cat_query){
                                   die('query failed' .mysqli_error($connection));
                                }else{
                                    echo "data inserted";
                                }
                                header("Location:category.php");
                            }



                        }
                        
                        ?>
                        </div>
                        <div class="col-xs-6">
                        <table class="table  table-bordered table-hover">
                            <tr>
                            <thead>
                                <th> ID</th>
                                <th>Categories</th>
                                <th colspan="2">operation</th>
                            </thead>
                            </tr>
                            <tbody>
                            
                               <?php
           
            while($row = mysqli_fetch_assoc($select_all_categories_query)){
                $cat_title = $row['cat_title'];
                $cat_id = $row['cat_id'];
              echo "<tr>";
              echo "<td> {$cat_id} </td>";
              echo "<td> {$cat_title}</td>";
              echo "<td><a href='category.php?delete={$cat_id}'</a>Delete</td>";
              echo "<td><a href='category.php?edit={$cat_id}'</a>Edit</td>";
              echo "</tr>";
 
            }
            ?>
            <?php
            if(isset($_GET['delete'])){
                $cat_delete = $_GET['delete'];
            $query= "DELETE FROM `categories` WHERE cat_id = {$cat_delete}";
            $delete_query = mysqli_query($connection,$query);
            header("Location:category.php");
            if(!$delete_query){
                die(mysqli_error($connection)); 
            }


            }
              
            
            ?>
            
                            </tbody>
                        </table>

                    </div>
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
