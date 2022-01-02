 <?php
 if(isset($_GET['p_id'])){
    $the_post_id=$_GET['p_id'];
 }
 $query = "SELECT * FROM posts WHERE post_id = $the_post_id ";
 $select_post_by_id = mysqli_query($connection,$query);
 while($row = mysqli_fetch_assoc($select_post_by_id)){
     $post_id = $row['post_id'];
     $post_cat_id = $row['post_category_id'];
     $post_title = $row['post_title'];
     $post_author = $row['post_author'];
     $post_date = $row['post_date'];
     $post_image = $row['post_image'];
     $post_content = $row['post_content'];
     $post_comment = $row['post_comment_count'];
     $post_status = $row['post_status'];
     $post_tags = $row['post_tags'];
 }

 
 ?>                       
                       
                        
                         <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="Title">Post Title</label>
                        <input type="text" value="<?php echo $post_title;  ?>" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="posts_cat_id">Post Category id</label>
                        <input type="text" value="<?php echo $post_cat_id; ?>" class="form-control" name="posts_cat_id">
                        </div>
                        <div class="form-group">
                        <select name="" id="" >
                        <?php
                        $query = "SELECT * FROM categories ";
                        $select_categories = mysqli_query($connection,$query);
                        while($row = mysqli_fetch_assoc($select_categories)){
                         $cat_id = $row['cat_id'];
                         $cat_title = $row['cat_title'];
                       echo "<option value=''>$cat_title</option>";
                        
                        }
                            ?>
                      
                        </select>
                        
                        </div>
                        <div class="form-group">
                        <label for="Author"> Post Author</label>
                        <input type="text" value="<?php echo $post_author;  ?>" class="form-control" name="author">
                        </div>
                        <div class="form-group">
                        <img width="100px" src="../images/<?php echo $post_image; ?>" >
                        </div>
                        <div class="form-group">
                        <label for="Comments">comments</label>
                        <input type="text" value="<?php echo $post_comment;  ?>" class="form-control" name="comments">
                        </div>
                        <div class="form-group">
                        <label for="Status">PostStatus</label>
                        <input type="text" value="<?php echo $post_status;  ?>" class="form-control" name="status">
                        </div>
                        <div class="form-group">
                        <label for="Tags">Post Tags</label>
                        <input type="text" value="<?php echo $post_tags;  ?>" class="form-control" name="tags"><br/>
                        </div>
                        <div class="form-group">
                        <label for="Title">Post Contents</label>
                        <textarea value="<?php echo $post_content;  ?>" class="form-control" name="contents" cols="30" rows="10">
                        <?php echo $post_content;  ?>
                        </textarea>
                        </div>
                        <input type="submit" value="Update post" class="btn btn-primary" name="update_posts">

                        </form>