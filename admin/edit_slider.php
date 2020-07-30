<?php include "header.php";?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Update Slider</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">



                <div class="row">
                    <div class="col-lg-12">

                        <div class="card">
                            
                            <div class="card-body">

                               <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">Slider1</th>
                                            <th scope="col">Slider2</th>
                                            <th scope="col">Slider3</th>
                                         
                                        </tr>
                                    </thead>

                    <?php
                    $res=mysqli_query($con,"select * from sliders ");
                                         foreach ($res as $key => $row)
                                         {

                                            $slide1=$row['image1'];
                                             $slide2=$row['image2'];
                                              $slide3=$row['image3'];
                        }
                    ?>
                        <tr id="tblrow">
                            <td>  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><img src="../public/<?php  echo $slide1;?>" width="100px" height="100px" title="click here to update image"></button></td>
                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal1"><img src="../public/<?php  echo $slide2;?>" width="100px" height="100px" title="click here to update image"></td>
                            <td> <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal2"><img src="../public/<?php  echo $slide3;?>" width="100px" height="100px" title="click here to update image"></td>
                        </tr>
              
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider1</h4>
                                    </div>
                                    <div class="modal-body">

                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide1" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit1" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="modal fade" id="myModal1" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider2</h4>
                                    </div>
                                
                                    <div class="modal-body">

                                        <form action=" " method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide2" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit2" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="modal fade" id="myModal2" role="dialog">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Update Slider3</h4>
                                    </div>
                                 
                                    <div class="modal-body">

                                        <form action="" method="POST" enctype="multipart/form-data">

                                            <div class="custom-file mb-3">
                                                <input type="file" class="custom-file-input" id="customFile" name="slide3" required>
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                            
                                            <div class="col-md-3 offset-md-3">
                                                <input type="submit" class="btn btn-primary" name="submit3" value="change image">
                                            </div>
                                        </form>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </table>

              

                           </div>
                          </div>
                        </div>
                        </div> <!-- .card -->



                    </div>

                    <script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>

                    <?php
if(isset($_POST['submit1']))
{

   $fnm1=$_FILES['slide1']['name'];
    $dst1="../public/img/".$fnm1;
   $dst_db1="img/".$fnm1;
   move_uploaded_file($_FILES["slide1"]["tmp_name"], $dst1);
   mysqli_query($con,"update sliders SET image1= '$dst_db1' where id=1");
 ?>
     <script type="text/javascript">
        window.location="edit_slider.php";
    </script>

    <?php
}


if(isset($_POST['submit2']))
{

   $fnm1=$_FILES['slide2']['name'];
    $dst1="../public/img/".$fnm1;
   $dst_db1="img/".$fnm1;
   move_uploaded_file($_FILES["slide2"]["tmp_name"], $dst1);
   mysqli_query($con,"update sliders SET image2= '$dst_db1' where id=1");
 ?>
     <script type="text/javascript">
        window.location="edit_slider.php";
    </script>

    <?php
}


if(isset($_POST['submit3']))
{

   $fnm1=$_FILES['slide3']['name'];
    $dst1="../public/img/".$fnm1;
   $dst_db1="img/".$fnm1;
   move_uploaded_file($_FILES["slide3"]["tmp_name"], $dst1);
   mysqli_query($con,"update sliders SET image3= '$dst_db1' where id=1");
 ?>
     <script type="text/javascript">
        window.location="edit_slider.php";
    </script>

    <?php
}
    ?>







<?php include "footer.php";?>