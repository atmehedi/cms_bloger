<?php
if(isset($_POST['submit'])){
$post_title = $_POST['title'];
$post_author = $_POST['author'];
$post_cat_id = $_POST['post_cat_id'];
$post_status = $_POST['status'];

$post_image = $_FILES['image']['name'];
$post_image_temp = $_FILES['image']['tmp_name'];

$post_tags = $_POST['tags'];
$post_contents = $_POST['contents'];
$post_date = date('d-m-y');
$post_comments_counts = 4;


move_uploaded_file($post_image_temp,"../images/$post_image" );

$query = "INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES (NULL, {$post_cat_id}, '{$post_title}', '{$post_author}', now(), '{$post_image}', '{$post_contents}', '{$post_tags}', '{$post_comments_counts}', '{$post_status}');";

$checkQuery = mysqli_query($connection,$query);
if(!$checkQuery){
    die("query failed". mysqli_error($connection) );


}


}








?>
                       <form action="" method="post" enctype="multipart/form-data" >
                        <div class="form-group">
                            <label for="Title">Post Title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label for="post_cat_id">Post Category id</label>
                        <input type="text" placeholder="Post category id" class="form-control" name="post_cat_id">
                        </div>
                        <div class="form-group">
                        <label for="Title"> Post Author</label>
                        <input type="text" placeholder="Author" class="form-control" name="author">
                        </div>
                        <div class="form-group">
                        <label for="Title">Post image</label>
                        <input type="file" placeholder="image" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                        <label for="Title">comments</label>
                        <input type="text" placeholder="comments" class="form-control" name="comments">
                        </div>
                        <div class="form-group">
                        <label for="Title">PostStatus</label>
                        <input type="text" placeholder="Status" class="form-control" name="status">
                        </div>
                        <div class="form-group">
                        <label for="Title">Post Tags</label>
                        <input type="text" placeholder="tags" class="form-control" name="tags"><br/>
                        </div>
                        <div class="form-group">
                        <label for="Title">Post Contents</label>
                        <textarea placeholder=" Contents here" class="form-control" name="contents" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" value="publish post" class="btn btn-primary" name="submit">

                        </form>