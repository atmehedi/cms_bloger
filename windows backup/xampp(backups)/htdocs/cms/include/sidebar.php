<div class="col-md-4">

<!-- Blog Search Well -->


<div class="well">
    <form action="search.php" method="post">
    <h4>Blog Search</h4>
    <div class="input-group">
        <input type="text" class="form-control" name="search">
        <span class="input-group-btn">
            <input type="submit" class="btn btn-default" name="submit">
                <span class="glyphicon glyphicon-search"></span>
        </button>
        </span>
        </form>
    </div>
    <!-- /.input-group -->
</div>

<!-- Blog Categories Well -->
<div class="well">
    <h4>Blog Categories</h4>
    <div class="row">
        <div class="col-lg-6">
            <ul class="list-unstyled">
              <?php
              $query = "SELECT * FROM categories ";
              $select_all_categories_query = mysqli_query($connection, $query);
              while($row = mysqli_fetch_assoc($select_all_categories_query)){
                  $cat_title = $row['cat_title'];
                  echo "<li><a href='$cat_title'</a>$cat_title</li>";
              }
              
               
              ?>  
            
            
           <!-- <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>-->
            </ul>
        </div>
        <!-- /.col-lg-6 -->
        <div class="col-lg-6">
            <ul class="list-unstyled">
               <!-- <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
                <li><a href="#">Category Name</a>
                </li>
            -->
             <?php
              $query = "SELECT * FROM categories ";
              $select_all_categories_query = mysqli_query($connection, $query);
              while($row = mysqli_fetch_assoc($select_all_categories_query)){
                  $cat_title = $row['cat_title'];
                  echo "<li><a href='$cat_title'</a>$cat_title</li>";
              }
              
               
              ?> 
            </ul>
        </div>
        <!-- /.col-lg-6 -->
    </div>
    <!-- /.row -->
</div>

<!-- Side Widget Well -->
<div class="well">
    <h4>Side Widget Well</h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
</div>

</div>