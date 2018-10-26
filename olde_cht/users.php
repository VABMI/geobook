<?php


////////////////userebis wakitxva page php//////////////


session_start();

$host="127.0.0.1";
$user="root";
$pass="";
$basa="users";
$conn=new mysqli($host,$user,$pass,$basa);
if(!$conn){echo "error";}
else{

$sql="SELECT * FROM user where bit=1";
$result=mysqli_query($conn,$sql);
if($result){

while($row=mysqli_fetch_assoc($result)){
     if($row['id']==$_SESSION['your']){continue;}
	echo "<div class='userrr'><button   type='button' onclick='showHint(this.value)' class='userr' name='others' id='others' value='".$row['id']."'>".$row['name']." ".$row['lastname']."</button> </div><br>";
}


}
else{
	echo "error";
}


}



?>