<?php

$host="localhost";
$user="root";
$password="";
$db="funolympic";

session_start();


$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
   die("connection error");
}





if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $games=$_POST["games"];
   $location=$_POST["location"];
   $date = $_POST["date"];

    if ($data->connect_error) {
        die("Connection to server failed: " . $data->connect_error);
    }
    $query = "UPDATE game SET games = '$games',location = '$location' ,date = '$date' WHERE id='" . $_GET["id"] . "' ";
    if ($data->query($query) ==  TRUE) {
        echo "Specified Records updated...[OK]", "\n";
    }
    else {
        echo "Record Update Fail...[Error]", "\n";
    }
    $data->close();
    header("Location: gamelist.php");

};
