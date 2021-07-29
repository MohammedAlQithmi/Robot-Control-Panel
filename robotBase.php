<!DOCTYPE html>
<html lang="en">
<head>
<title>Robot Arm Control Panel</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- import Bootstrap -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style_Base.css">

</head>
<body>

<div class="topnavbar">
		<input type="checkbox" id="menu-icon-input">
	    <label id="menu-icon" for="menu-icon-input">&#9776;</label>
	    <div class="nav-items">
	        <ul>
	            <li><a href="index.php" >Robot Arm </a></li>
	            <li><a class="active" href="robotBase.php">Robot Base</a></li>
	         </ul>
	     </div>
	</div>

<div class="container-fluid">
<div class="centered"  id="rcorners2">

<h2>Robot Base Control Panel</h2>

<form  method="post" >
<table>
  <tr>
    <td></td>
    <td><input type="submit" value="Forward" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td></td>
  </tr>
  <tr>
    <td><input type="submit" value="Left" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td><input type="submit" value="Stop" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td><input type="submit" value="Right" name="Movement" class="button4" style="background-color:#4e9af1"></td>
  </tr>
  <tr>
    <td></td>
    <td><input type="submit" value="Backward" name="Movement" class="button4" style="background-color:#4e9af1"></td>
    <td></td>
  </tr>
</table>
</form>
</div>
</div>
</body>
</html>

<?php 

require 'DataBase.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$move=$_POST["Movement"];
	
	$sql = "UPDATE movement SET movement='$move'";	

if ($conn->query($sql) === TRUE) {
  echo '<p style="color:white; text-align:center;" >Record updated successfully</p>';
} else {
  echo '<p style="color:white; text-align:center;" >Error updating record:</p>' . $conn->error;
}

$conn->close();




 ?>