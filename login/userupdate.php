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
   $username=$_POST["username"];
   $usertype=$_POST["usertype"];
   $email = $_POST["email"];
   $contact = $_POST["contact"];
   $gender = $_POST["gender"];
   $country = $_POST["country"];


    if ($data->connect_error) {
        die("Connection to server failed: " . $data->connect_error);
    }
    $query = "UPDATE login SET email = '$email',contact = '$contact', gender = '$gender',country = '$country' WHERE username='" . $_SESSION["username"] . "' ";
    if ($data->query($query) ==  TRUE) {
        echo "Specified Records updated...[OK]", "\n";
    }
    else {
        echo "Record Update Fail...[Error]", "\n";
    }
    $data->close();
    header("Location: user.php");

};
