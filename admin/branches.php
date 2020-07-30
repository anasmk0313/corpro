<?php include "header.php" ?>
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Add Branches</h1>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-8">
                        <div class="card">
                            <form name="insert" action="" method="post">

                                    <div class="card-body">
                                <table width="100%" height="117"  border="0">
                                <tr>
                            <th width="27%" height="63" scope="row">Sate :</th>
                            <td width="73%"><select onChange="getdistrict(this.value);"  name="state" id="state" class="form-control" >
                            <option value="">Select</option>
                            <?php $query =mysqli_query($con,"SELECT * FROM state");
                            while($row=mysqli_fetch_array($query))
                            { ?>
                            <option value="<?php echo $row['StCode'];?>"><?php echo $row['StateName'];?></option>
                            <?php
                            }
                            ?>
                            </select></td>
                            </tr >
                           <tr >
                          <th scope="row">District :</th>
                           <td><select name="district" id="district-list" class="form-control">
                           <option value="">Select</option>
                           </select></td>
                              </tr>
                              <tr>
                           <th scope="row">Branch name:</th>
                            <td><input  name="branch" id="branch" class="form-control">
                           </td>
                            </tr>
                            <tr>
                            <th scope="row">Address Line1:</th>
                            <td><input  name="add1" id="add1" class="form-control">
                           </td>
          
                           </tr>

                            <tr>
                            <th scope="row">Address Line2:</th>
                            <td><input  name="add2" id="add2" class="form-control">
                           </td>
          
                           </tr>

                            <tr>
                            <th scope="row">Pincode:</th>
                            <td><input  name="pincode" id="pincode" class="form-control">
                           </td>
          
                           </tr>
                          
                              
                       </table><br>
                        <div class="form-group" style="text-align: center;"><input type="submit" name="submit1" id="submit1" class="btn btn-primary" value="Add Branch"></div>
                                        
                   </div>
                           </form>
                            </div>
                        </div> <!-- .card -->

                   
                    <!--/.col-->
                     
                    
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Branch Nmae</strong>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Branch Name</th>
                                            <th scope="col">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                         $res=mysqli_query($con,"select * from `branches");
                                         foreach ($res as $key => $row)
                                         {
                                         ?>

                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $row['b_name']; ?></td>
                                          
                                            <td><a href="delete_b.php?id=<?php echo $row['id'];?>"><i class="fa fa-close"></i></a></td>
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
                     </div>     

     <?php 
    if(isset($_POST["submit1"]))
    {
      
       
       mysqli_query($con,"insert into `branches` values(NULL,'$_POST[branch]','$_POST[state]','$_POST[district]','$_POST[add1]','$_POST[add2]','$_POST[pincode]',NULL)"); 
    ?>
    <script type="text/javascript">
        alert("Branch added successfully");
         window.location.href =window.location.href;
    </script>
    <?php
        }
    ?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

    <script>
function getdistrict(val) {
$.ajax({
type: "POST",
url: "get_district.php",
data:'state_id='+val,
success: function(data){
$("#district-list").html(data);
}
});
}
</script>
<?php include "footer.php";?>