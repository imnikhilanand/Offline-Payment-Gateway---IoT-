<?php
$name=$_POST["name"];
$employee=$_POST["employee"];
$password=$_POST["password"];
$connection1=mysqli_connect("localhost","root","","dcb");
$query1="INSERT INTO dcb.admin(name,employee,password) VALUES ('$name','$employee','$password')";
$result1=mysqli_query($connection1,$query1);
if($result1)
{
	echo "Successful";
}
else
{
	die(mysqli_error($connection1));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>DCB Gramin Bank Sewa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans' rel='stylesheet'>
	<style>
	body{
		background-color:#ffffff;
	}
	.navbar {
      margin-bottom: 0;
      background-color: #3333ff;
      z-index: 9999;
      border: 0;
      font-size: 15px !important;
      line-height: 1.42857143 !important;
      border-radius: 0;
      font-family: Arial, sans-serif;
  }
  #loadmore
  {
	background-color: #3333ff; /* Blue-Green */
    color: white;
    padding: 5px 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 12px;
    margin: 4px 2px;
    cursor: pointer;
	border-radius: 2px;
	border: 1px solid #3333ff;
  }
	</style>
</head>
<body>

<!--navigation bar-->
<nav class="navbar navbar-default navbar-fixed-top" class="navibar">
  <div class="container-fluid">
    <div class="navbar-header">
	  <a class="navbar-brand" href="index.php"><font color="white" face="Alegreya Sans">DCB Gramin Bank Sewa</font></a>
    </div>
	</div>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<!--body-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-2" style="background-color:#ffffff;">
	</div>
	<div class="col-sm-8" align="center" style="background-color:#ffffff;">
	<p><font face="alike" size="16">डीसीबी ग्रामीन बैंक सेवा में आपका स्वागत है । <br> Welcome to DCB Gramin Bank Sewa.</font></p><br><br><br>
	<div align="center"><button type="button" id="loadmore" onclick="window.location.href='index.php'">लॉग इन करें / Log In</button></div>
	</div>
	<div class="col-sm-2" style="background-color:#f9f9f9;">
	</div>
  </div>
</div>  
	
	
</body>
</html>