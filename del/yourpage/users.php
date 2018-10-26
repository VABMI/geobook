<?php


////////////////userebis wakitxva page php//////////////
$host="localhost";
$user="id2101580_root";
$pass="saqartvelo";
$basa="id2101580_root";



session_start();

$conn=new mysqli($host,$user,$pass,$basa);
if(!$conn){echo "error1";}
else{



if(!$result=mysqli_query($conn,"SELECT* FROM user")){

while($row=mysqli_fetch_assoc($result)){
     if($row['id']==$_SESSION['your']){continue;}
	echo "<div class='userrr'><button   type='button' onclick='showHint(this.value)' class='userr' name='others' id='others' value='".$row['id']."'>".$row['name']." ".$row['lastname']."</button> </div><br>";
}


}
else{
	echo "error1";
}


}

?>