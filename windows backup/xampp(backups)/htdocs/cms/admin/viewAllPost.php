
<?php ob_start(); ?>
<?php //include "../include/db.php"; ?>
<table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Date</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Comment</th>
                                <th>Status</th>
                                <th>Tags</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                       $query = "SELECT * FROM posts ";
                        $select_post = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($select_post)){
                            $post_id = $row['post_id'];
                            $post_title = $row['post_title'];
                            $post_author = $row['post_author'];
                            $post_date = $row['post_date'];
                            $post_image = $row['post_image'];
                            $post_content = $row['post_content'];
                            $post_comment = $row['post_comment_count'];
                            $post_status = $row['post_status'];
                            $post_tags = $row['post_tags'];
                            echo "<tr>";
                            echo "<td>$post_id </td>";
                            echo "<td>$post_title </td>";
                            echo "<td>$post_author </td>";
                            echo "<td>$post_date </td>";
                            echo "<td><img src='../images/$post_image' width ='160px' height='80px'></td>";
                            echo "<td>$post_content </td>";
                            echo "<td>$post_comment </td>";
                            echo "<td>$post_status </td>";
                            echo "<td>$post_tags </td>";
                            echo "<td><a href='posts.php?delete={$post_id}'</a>Delete</td>";
                            echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'</a>Edit</td>";
                            echo "</tr>";
                        }
                            ?>  
                             <?php
                                if(isset($_GET['delete'])){
                                 $post_delete = $_GET['delete'];
                                 $query= "DELETE FROM `posts` WHERE post_id = {$post_delete}";
                                    $delete_query = mysqli_query($connection,$query);
                                 header("Location:index.php");
                                 if(!$delete_query){
                                 die(mysqli_error($connection)); 
                                 }


                                  }
              
            
                                 ?>
                           


                            </tbody>
                        </table>
