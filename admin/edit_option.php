<?php include "header.php";

$id=$_GET['id'];
 
 $res=mysqli_query($con,"select * from products where id=$id");
 while($row=mysqli_fetch_array($res))
 {
    $product=$row['title'];
    $category=$row['category'];
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
                        <h1>Update Question</h1>
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
                                 <div class="card-header"><strong>Update Question with Text</strong></div>
                            <div class="card-body card-block">
                                <div class="form-group"><label for="Exam" class=" form-control-label"> Question</label><input type="text" name="question" value="<?php echo $question;?>" placeholder="Add Question" class="form-control" ></div>
                                    <div class="form-group"><label for="Time" class=" form-control-label"> Option1</label><input type="text" name="opt1" value="<?php echo $option1;?>" placeholder="Add Option1" class="form-control" ></div>
                                     <div class="form-group"><label for="Time" class=" form-control-label"> Option2</label><input type="text" name="opt2" value="<?php echo $option2;?>" placeholder="Add Option2" class="form-control" ></div>
                                      <div class="form-group"><label for="Time" class=" form-control-label"> Option3</label><input type="text" name="opt3" value="<?php echo $option3;?>" placeholder="Add Option3" class="form-control" ></div>
                                       <div class="form-group"><label for="Time" class=" form-control-label"> Option4</label><input type="text" name="opt4" placeholder="Add Option4" value="<?php echo $option4;?>" class="form-control" ></div>
                                        <div class="form-group"><label for="Time" class=" form-control-label"> Answer</label><input type="text" name="answer" value="<?php echo $answer;?>" placeholder="Add Answer" class="form-control" ></div>

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
    mysqli_query($con,"update questions SET question='$_POST[question]',option1='$_POST[opt1]',option2='$_POST[opt2]',option3='$_POST[opt3]',option4='$_POST[opt4]',answer='$_POST[opt4]' where id=$id");
    ?>
    <script type="text/javascript">
        window.location="add_edit_questions.php?id=<?php echo $id1;?>";
    </script>
<?php
}
?>
<?php include "footer.php";?>