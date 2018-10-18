<?php
$hostname="localhost";
$user="";
$pass="saqartvelos";
$base="id2101580_vaxo";

$conn=new mysqli($hostname,$user,$pass,$base);



if(!$conn){echo "not connecting ";}
else{

if(isset($_POST['Name'])&&isset($_POST['LastName'])&&isset($_POST['Email'])&&isset($_POST['Psw'])&&isset($_POST['Psw-repeat']))
{


	if($_POST['Psw']==$_POST['Psw-repeat']){


$name=$_POST['Name'];
$lastname=$_POST['LastName'];
$password=$_POST['Psw'];
$email=$_POST['Email'];
$rank=$_POST['RankName'];



$sql="INSERT INTO user (name,lastname,password,email,tablename) VALUES ('$name','$lastname','$password','$email','$rank')";

if(!mysqli_query($conn,$sql)){print "not innsert";}

mysqli_close($conn);

///////////////////////  BAZIS SHEQMNA  /////////////////////////////////////

///////////////////////////////////////




}

else {


}




}
}


?>