<?php
    $server='localhost';
	$userid='sorfinaamy';
	$password='hahaha';
	$eazy='sorfinaamy';
	
	$conn=mysql_connect("localhost","sorfinaamy","hahaha");
	mysql_select_db("$eazy",$conn) or die (mysql_error());
	
	if($conn)
	{
		echo "berjaya";
}
	?>