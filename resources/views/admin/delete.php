<?php

include "./connection.php";
$id=$_GET['id'];


$res=mysqli_query($con,"delete from categories where id=$id");


header("location:category.php");


?>