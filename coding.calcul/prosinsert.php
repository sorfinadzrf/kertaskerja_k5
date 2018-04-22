<?php
include('config.php');
//$_post method penangkapan data

$username=$_POST['username'];
$password=$_POST['password'];

$query="insert into user values('$username','$password')";
if(mysql_query($query))
else{
	echo"berjayaaaaaa!";
}

?>