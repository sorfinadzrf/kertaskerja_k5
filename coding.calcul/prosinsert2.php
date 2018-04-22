<?php
include('config.php');
//$_post method penangkapan data

$no1=$_POST['no1'];
$operasi=$_POST['operasi'];
$no2=$_POST['no2'];
$catatan=$_POST['catatan'];
//$papar=$_POST['papar'];
$query="insert into kira set no1='$no1', operasi='$operasi', no2='$no2', catatan='$catatan'";
$process=mysql_query($query) or die ("Error:").mysql_error;
if(mysql_query($query))
{
	header ("location:papar.php");}
?>