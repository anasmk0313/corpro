<?php include "header.php";

$id=$_GET['id'];
 
 $res=mysqli_query($con,"select * from products left join categories on products.category_id=categories.id where products.id=$id");
 while($row=mysqli_fetch_array($res))
 {
    $product=$row['title'];
    $category=$row['category_id'];
    $category_name=$row['category'];
    $image=$row['image'];
    $size=$row['size'];
    $weight=$row['weight'];
     $thickness=$row['thickness'];
     $water_absorption=$row['water_absorption'];
    $composition=$row['composition'];
     $installation=$row['installation'];
      $working_life=$row['working_life'];
 }
 ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Product</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            
                            <div class="card-body">
                                 <div class="col-lg-12">
                             <form action=""  name="form1" method="POST" enctype="multipart/form-data">
                          <div class="card">
                        
                                 <div class="card-body">
                                 <div class="card-header"><strong>Update Product</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Product</label><input type="text" name="title" value="<?php echo $product;?>" placeholder="Add Question" class="form-control" ></div>
                                     <div class="form-group">
                                  <label for="sel1">Select list:</label>
                                  <select class="form-control" id="sel1" name="category">

                                     <option value="<?php echo $category; ?> " selected hidden><?php echo $category_name; ?></option>
                                      <?php
                                         $res=mysqli_query($con,"select * from `categories ");
                                         foreach ($res as $key => $row1)
                                         {
                                         ?>
                                         <option value="<?php echo $row1['id'];?>"><?php echo $row1['category']; ?></option>
                                           <?php
                                        }
                                       ?>
                                     
                                      </select>
                                    </div> 
                                    <div class="form-group"><img src="../public/<?php echo $image;?>" height="50" width="50"><br><label for="Time" class=" form-control-label"> Image</label><input type="file" name="image" placeholder="Update Image" class="form-control" style="padding-bottom:40px;"></div>
                                     
                                       <div class="form-group"><label for="Size" class=" form-control-label"> Size</label><input type="text" name="size" placeholder="Size" value="<?php echo $size;?>" class="form-control" ></div>

                                       <div class="form-group"><label for="Weight" class=" form-control-label"> Weight</label><input type="text" name="weight" placeholder="Weight" value="<?php echo $weight;?>" class="form-control" ></div>
                                       <div class="form-group"><label for="Thickness" class=" form-control-label"> Thickness</label><input type="text" name="thickness" placeholder=" Thickness" value="<?php echo $thickness;?>" class="form-control" ></div>

                                         <div class="form-group"><label for="Water_absorption" class=" form-control-label"> Water_absorption</label><textarea name="water_absorption" placeholder="Add Weight" value="<?php echo $water_absorption;?>" class="form-control" ></textarea  >


                                           <div class="form-group"><label for="Composition" class=" form-control-label"> Composition</label><textarea  name="composition" placeholder="Composition"  class="form-control" >
                                             <?php echo $composition;?>
                                           </textarea >

                                             <div class="form-group"><label for="Installation" class=" form-control-label"> Installation</label><textarea name="installation" placeholder="Installation"  class="form-control" ><?php echo $installation;?></textarea>

                                             <div class="form-group"><label for="Working Life" class=" form-control-label"> Working Life</label><textarea name="working_life" placeholder="Working life"  class="form-control" ><?php echo $working_life;?></textarea>

                                      <div class="form-group"><input type="submit" name="submit1" id="submit1" placeholder="Exam In Minutes" class="btn btn-success" value="Update Question"></div>
                                        </div>

                                            </div>

                                 </div>
                               </form>
                            </div>
                             </div>
                            </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                                            
<?php
if(isset($_POST['submit1']))
{

   $fnm1=$_FILES['image']['name'];

    if($fnm1!="")
   {
    $dst1="../public/img/products/".$fnm1;
   $dst_db1="img/products/".$fnm1;
   move_uploaded_file($_FILES["image"]["tmp_name"], $dst1);
   mysqli_query($con,"update products set title= '$_POST[title]',category_id= '$_POST[category]',image='$dst_db1',size= '$_POST[size]',weight= '$_POST[weight]',thickness= '$_POST[thickness]',water_absorption= '$_POST[water_absorption]',composition= '$_POST[composition]',installation= '$_POST[installation]',working_life= '$_POST[working_life]' where id=$id");
   }
    mysqli_query($con,"update products SET title= '$_POST[title]',category_id= '$_POST[category]',size= '$_POST[size]',weight= '$_POST[weight]',thickness= '$_POST[thickness]',water_absorption= '$_POST[water_absorption]',composition= '$_POST[composition]',installation= '$_POST[installation]',working_life= '$_POST[working_life]' where id=$id");
    ?>
    <script type="text/javascript">
        window.location="view_products.php";
    </script>
<?php
}
?>
<?php include "footer.php";?>
