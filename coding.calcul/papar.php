
<html>
<head>
<meta charset="UTF-8">

<style>
table, th, td{
border: 1px solid black;
border-collapse:collapse;
padding: 10px;
}
td{
	text-align: center;
}
</style>

<?php
include('config.php');
$query="SELECT * from kira";
?>
<center>
<body bgcolor="orange">
<img src="99.png" alt="kal" style="width:350px;height:228px;"/>   
 	<center><h1><b><font color="white"/><font face="rockwell"/>EAZY FAST CALCULATOR</font></b></h1></center>
        <title>EazyFastCalculator</title>
</center>

	<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #4CAF50;
}
</style>
</head>

<body>

<ul>
<li><a href="index.php">Home</a></li>
  <li><a href="signin.php">Sign-In</a></li>
  <li><a href="signup.php">Sign-Up</a></li>
 <li><a class="active" href="papar.php">Data</a></li>
</ul>


	<br>
</br>	

<style>
input[type=text], select {
    width: 100%;
    padding: 12px 10px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 3px;
    background-color: #f2f2f2;
    padding: 8px;
}
</style>

<center><table style="width:70%">
    <br><br>
<table border="1" width="900" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#58D68D"><strong>NO1</strong></td>
<td align="center" bgcolor="#58D68D"><strong>OPERASI</strong></td>
<td align="center" bgcolor="#58D68D"><strong>NO2</strong></td>
<td align="center" bgcolor="#58D68D"><strong>CATATAN</strong></td>
</tr>

<?php
$ambil=mysql_query("select * from kira");
while ($data=mysql_fetch_array ($ambil))
{?>

<tr>
<td><?php echo $data['no1'];?></td>
<td><?php echo $data['operasi'];?></td>
<td><?php echo $data['no2'];?></td>
<td><?php echo $data['catatan'];?></td>
</tr>
<?php
}
?>


<br>
<a href="operasi.php"><button class="Tambah Data"> Tambah Data </button></a>
</br>
</center>
</body>
</head>
</html>