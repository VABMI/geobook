<?php
$hostname="localhost";
$useri="id2101580_vaxo";
$pass="saqartvelo";
$base="id2101580_vaxo";





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

////cho "yess";
}

mysqli_close($conn);





$conn=new mysqli($hostname,$useri,$pass,$base);
$sql="SELECT * FROM user WHERE email='".$email."'";
if(!mysqli_query($conn,$sql)){echo "not connect with the table" ; }

else{///


	$row=mysqli_fetch_assoc(mysqli_query($conn,$sql)); /////////// kaida ar modis monacemebi shemowmeba unda

if($row['password']==$password&&$row['password']!=null){

	session_start();
   $_SESSION['name']=$row['name'];
  $_SESSION['lsname']=$row['lastname'];
	$_SESSION['your']=$row['id'];
	
mysqli_close($conn);
header('location:yourpage/index1.php');
echo "movidaaa1111";
//echo "movidaaa";
//echo $password."sdsdsd".gettype($row['password']);


}



//if(!$sedegi){echo "ERRORRI"}




}////



}

?>