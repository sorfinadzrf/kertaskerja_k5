<html>
<body bgcolor="orange">
    <head>
	<center><img src="99.png" alt="kal" style="width:350px;height:228px;"/></center>
	<center><h1><b><font color="white"/><font face="rockwell"/>EAZY FAST CALCULATOR</font></b></h1></center>
	<center><h3><b><font color="white"/><font face="rockwell"/>CALCULATE NOW!</font></b></h3></center>
        <title>EazyFastCalculator</title>
			
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


<ul>
  <li><a  href="index.php">Home</a></li>
  <li><a class="active" href="signin.php">Sign-In</a></li>
  <li><a href="signup.php">Sign-Up</a></li>
</ul>

<p>
<center>
<form method='post' action="prosinsert2.php">
<input type="text" id="no1" name="no1" placeholder="Masukkan nombor pertama">

<select id="operasi" name="operasi">
<option>+</option>
<option>-</option>
<option>*</option>
<option>/</option>
<option>%</option>
</select>

<input type="text" id="no2" name="no2" placeholder="Masukkan nombor kedua">



<input type="text" name="catatan" placeholder="Catatan">

<p id="papar" name='papar'></p>
<button name="submit">Simpan</button>
</form>
<button class="btn" onClick="papar()">Papar</button>
</center>
</p>

<script>
function papar() {
	var operasi=document.getElementById("operasi").value;
	var no1=parseInt(document.getElementById("no1").value);
		var no2=parseInt(document.getElementById("no2").value);
		var operasi=document.getElementById("operasi").value;
	
	if (operasi=='+')
	{
		var hasil= no1 + no2;
		document.getElementById('papar').innerHTML="Operasi tambah:" +  no1 + "+" +  no2 + "=" +  hasil;
	}
	
	else if (operasi=='-')
	{
		var hasil= no1 - no2;
		document.getElementById('papar').innerHTML="Operasi tolak:" + no1 + "-" + no2 + "=" + hasil;
	}

    else if (operasi=='*')
	{
		var hasil= no1 * no2;
		document.getElementById('papar').innerHTML="Operasi darab:" + no1 + "x" + no2 + "=" + hasil;
	}
	
	else if (operasi=='/')
	{
		var hasil= no1 / no2;
		document.getElementById('papar').innerHTML="Operasi bahagi:" + no1 + "/" + no2 + "=" + hasil;
	}
	
	else
	{
		var hasil= no1 % no2;
        document.getElementById('papar').innerHTML="modulus:" + no1 + "%" + no2 + "=" + hasil;
	}	
}
</script>
</body>
</html>



	