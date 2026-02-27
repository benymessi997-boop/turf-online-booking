

<?php 
include("dbconnect.php");
$id=$_GET['id'];
$qry=mysqli_query($conn,"delete from turf where id=$id");
header("location:viewg.php");


?>



