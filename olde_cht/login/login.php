<?php

$hostname="127.0.0.1";
$useri="root";
$pass="";
$base="users";




$conn=new mysqli($hostname,$useri,$pass,$base);

if(!$conn){echo "not connecton database";}


if(isset($_POST['username'])&&isset($_POST['password'])){
$email=$_POST['username'];
$password=$_POST['password'];






if(!$conn){echo "not connecton database";}



$sql=  "UPDATE user
SET bit = '1'
WHERE email= '$email';";

if(mysqli_query($conn,$sql)){

	echo "yess";
}

mysqli_close($conn);





$conn=new mysqli($hostname,$useri,$pass,$base);

$sql="SELECT * FROM user WHERE email='".$email."'";
if(!mysqli_query($conn,$sql)){echo "not connect with the table" ; }

else{///


	$row=mysqli_fetch_assoc(mysqli_query($conn,$sql)); /////////// kaida ar modis monacemebi shemowmeba unda

if($row['password']==$password&&$row['password']!=null){

	session_start();

	$_SESSION['your']=$row['id'];
	$_SESSION['yourname']=$row['name'];
	$_SESSION['yourlastname']=$row['lastname'];
	header('location: http://localhost/Bootstrap-Website-Starter-Files/Bootstrap Website Starter Files/index1.php');

//echo $password."sdsdsd".gettype($row['password']);


}



//if(!$sedegi){echo "ERRORRI"}




}////



}


?>