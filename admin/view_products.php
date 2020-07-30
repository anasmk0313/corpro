<?php include "header.php";

?>
        <!-- Header-->


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>View Products</h1>
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

                               <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Product</th>
                                            <th scope="col">Image</th>
                                           
                                             <th scope="col">Edit</th>
                                            <th scope="col">Delete</th>
                                         
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i=1;
                                         $res=mysqli_query($con,"select * from products  order by id DESC");
                                         foreach ($res as $key => $row)
                                         {
                                        
                                       ?>
                                        <tr>
                                            <td><?php echo $i; ?> </td>
                                             <td><?php echo $row["title"]; ?> </td>
                                            
                                             <td><img src= "../public/<?php echo $row["image"];?>"  height='50',width='50'></td>
                                            
                                       
                                            
                                          <td> <a href="edit_products.php?id=<?php echo $row["id"];?>"> <i class='fa fa-eye'> </i></a></td>
                                       
                                            
                                            
                                             <td>
                                               <a href="delete_product.php?id=<?php echo $row["id"];?>"> <i class='fa fa-close'> </i></a>
                                               </td>
                                            </tr>
                                           <?php
                                             $i++;
                                        }


                                       ?>
                                    </tbody>
                                </table>
                            </div>
                          </div>
                        </div>
                      </div>
                        </div> <!-- .card -->

                    </div>
                    <!--/.col-->
                   
                    <!--/.col-->
                                          

<?php
if(isset($_POST['submit1']))
{

  $fnm1=$_FILES["p_image"]["name"];
  $dst1="./images/uploads/".$fnm1;
   $dst_db1="images/uploads/".$fnm1;
   move_uploaded_file($_FILES["p_image"]["tmp_name"], $dst1);

   


  mysqli_query($con,"insert into products values(NULL,'$_POST[p_name]','$_POST[category]','$dst_db1','$_POST[size]','$_POST[weight]','$_POST[thickness]','$_POST[water_absorption]','$_POST[composition]','$_POST[installation]','$_POST[working_life]')") or die(mysqli_error($con));
  ?>
  <script type="text/javascript">
    alert("question added successfully");
    window.location.href=window.location.href;
    </script>
    <?php
}
?>

<?php include "footer.php";?>