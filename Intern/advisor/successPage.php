<?php
session_start();

if(empty($_SESSION["jcid"])){
	header("Location: restrict.php");
}
?>
<?php 
	$id=$_SESSION['jcid'];
	session_unset(); 
	session_destroy(); 
?>
 <html>
<head>
<link rel="stylesheet" href="nav.css">
</head>
<body>
<ul>
  <li><h2>Advisor</h2></li>
  <li><a class="active" href="addJobC.php">create job card</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>
<div style="margin-left:25%;padding:1px 16px;height:1000px;">
	<div>
	<center><h1> job card id:- <?php echo $id; ?></h1>
	<img src="images/finish.jpg">
	</center>
	</div>
</div>
</body>
</html>