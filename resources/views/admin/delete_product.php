<?php

include "./connection.php";
$id=$_GET['id'];

$res=mysqli_query($con,"delete from products where id=$id");

?>
 <script type="text/javascript">
        window.location="view_products.php";
    </script>
    <?php


