<?php include "header.php" ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Category</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <form action=""  name="form1" method="POST">
                                 <div class="card-body">
                                 <div class="card-header"><strong>Add</strong><small> Category</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Category" class=" form-control-label">New  Category</label><input type="text" name="cat_name" placeholder="New Category" class="form-control" required=""></div>

                                  <div class="form-group"><input type="submit" name="submit1" id="submit1" class="btn btn-success" value="Add Category"></div>
                                        
                                            </div>
                                  
                                        

                                 </div>
                             </form>
                            </div>
                        </div> <!-- .card -->

                   
                    <!--/.col-->
                      <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Product Categories</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Category Name</th>
                                            <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $res=mysqli_query($con,"select * from `categories ");
                                         foreach ($res as $key => $row)
                                         {
                                         ?>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $row['category']; ?></td>
                                            <td><a href="edit_category.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil"></i></a></td>
                                            <td><a href="delete.php?id=<?php echo $row['id'];?>"><i class="fa fa-close"></i></a></td>
                                        </tr>
                                       <?php
                                        }
                                       ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     </div>     

    <?php 
    if(isset($_POST["submit1"]))
    {
      
       
       mysqli_query($con,"insert into `categories` values(NULL,'$_POST[cat_name]',NULL)"); 
    ?>
    <script type="text/javascript">
        alert("Category added successfully");
         window.location.href =window.location.href;
    </script>
    <?php
        }
    ?>
<?php include "footer.php";?>