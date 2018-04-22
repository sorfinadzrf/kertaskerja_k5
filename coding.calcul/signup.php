<?php
include('config.php');
?>

<html>
<body bgcolor="orange">
    <head>
	<center><img src="99.png" alt="kal" style="width:350px;height:228px;"/></center>
	<center><h1><b><font color="white"/><font face="rockwell"/>EAZY FAST CALCULATOR</font></b></h1></center>
	<center><h3><b><font color="white"/><font face="rockwell"/>SIGN-UP FOR FREE!</font></b></h3></center>
        <title>EazyFastCalculator</title>
    </head>
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
  <li><a class="active" href="signup.php">Sign-Up</a></li>
</ul>

</body>
</html>

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
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 10px;
}
</style>
<body>

<div>
  <form action="signin.php">
    <input type="text" id="username" name="username" placeholder="Your Username">
     <input type="text" id="password" name="password" placeholder="Your Password">
  
   <input type="submit" value="Submit">
   
   
  <?php
	  include ('config.php');
	  $i=1;
	  
	  if (mysql_num_rows($data)>0)
	  {
		  while
		  ($row=mysql_fetch_array($data))
		  {
			  ?>
			  <tr>
			  <td><?php echo $i++;?></td>
		  <td><?php echo $row["username"];?></td>
		  <td><?php echo $row["password"];?></td>
		  
		  <?php
		  }
	  }
	  ?>
	  
  </form>
  
</div>

</body>
</html>
