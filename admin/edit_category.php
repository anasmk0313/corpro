<?php include "header.php" ;

$id=$_GET['id'];
$res=mysqli_query($con,"select * from categories where id=$id");
while($row=mysqli_fetch_assoc($res))
{
    $name=$row['category'];
   
}
?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Edit Category</h1>
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
                                 <div class="card-header"><strong>Edit</strong><small> Category</small></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Exam Category</label><input type="text" name="cat_name" placeholder="New Category" class="form-control" value="<?php echo $name;?>"></div>
                                 

                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Update Exam"></div>
                                        
                                            </div>

                                 </div>
                             </form>
                            </div>
                        </div> <!-- .card -->

                     </div>     

    <?php 
    if(isset($_POST["submit1"]))
    {
       mysqli_query($con,"update `categories` SET category='$_POST[cat_name]' where id=$id"); 
    ?>
    <script type="text/javascript">
        alert("Updated successfully");
         window.location.href ="category.php";
    </script>
    <?php
        }
    ?>
<?php include "footer.php";?>