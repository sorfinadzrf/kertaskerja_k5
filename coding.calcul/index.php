
<html>
<body bgcolor="orange">
    <head>
	<center><img src="99.png" alt="kal" style="width:350px;height:228px;"/></center>
	<center><h1><b><font color="white"/><font face="rockwell"/>EAZY FAST CALCULATOR</font></b></h1></center>
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
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="signin.php">Sign-In</a></li>
  <li><a href="signup.php">Sign-Up</a></li>
</ul>

<script>

function amy(){
	document.getElementById('image').src="amy.jpg";
	document.getElementById("papar").innerHTML="";
}

function ayu(){
	document.getElementById('image').src="ayu3.jpg";
	document.getElementById("papar").innerHTML="";
	
	if (gambar=amy)
	{
		document.getElementById('image').src="amy.jpg";
		document.getElementById("papar").innerHTML="Hi, saya Amy Noorhan.";
	}
	
	else if (gambar=ayu)
	{
		document.getElementById('image').src="ayu3.jpg";
		document.getElementById('papar').innerHTML="Hi, saya Sorfina Dzarif";
	}
		
}
</script>
</head>

<center>
<body>
<h3>SISTEM INI DIBANGUNKAN OLEH:</h3>
<p id="papar"></p>
<img id="image" src="amy.jpg" style="width:350px" "height:350px">
<img id="image" src="ayu3.jpg" style="width:350px" "height:150px">

</body>
</html>
		