<?php

include "./connection.php";
$id=$_GET['id'];


$res=mysqli_query($con,"delete from branches where id=$id");


header("location:branches.php");


?>