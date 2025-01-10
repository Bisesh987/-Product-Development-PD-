<?php


$host="localhost";
$user="root";
$password="";
$db="funolympic";
   $data=mysqli_connect($host,$user,$password,$db);
   $id=$_GET['id'];
 
    $sql = "DELETE FROM login WHERE id='" . $_GET["id"] . "'";
 
    if (mysqli_query($data, $sql)) {
 
        echo "Record deleted successfully";
 
    } else {
     
        echo "Error deleting record: " . mysqli_error($data);
    }
    mysqli_close($data);
    header("Location: allusers.php");
?>