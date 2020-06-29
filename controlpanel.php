<style>
body {
  background-color: lightblue;
}
</style>
<?php

// Create connection
$conn = mysqli_connect('localhost', 'dana','1234','summer');

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
//////
if(isset($_POST['but1'])){
	echo"<h1 align=center>S</h1>";
		$sql="INSERT INTO sum (stop) VALUES('S')";
	if(!mysqli_query($conn,$sql))
{
	echo'not insert';
	
}
else {
	echo'insert';
	
}
}



if(isset($_POST['but2'])){
	echo"<h1 align=center>R</h1>";
		$sql="INSERT INTO sum (rightt) VALUES('R')";
	if(!mysqli_query($conn,$sql))
{
	echo'not insert';
	
	
}
else {
	echo'insert';
	
}
}


if(isset($_POST['but3'])){
	echo"<h1 align=center>L</h1>";
		$sql="INSERT INTO sum (leftt) VALUES('L')";
	if(!mysqli_query($conn,$sql))
{
	echo'not insert';
	
}
else {
	echo'insert';
	
}
}


if(isset($_POST['but4'])){
	echo"<h1 align=center>F</h1>";
		$sql="INSERT INTO sum (forward) VALUES('F')";
	if(!mysqli_query($conn,$sql))
{
	echo'not insert';
	
}
else {
	echo'insert';
	
}
}


if(isset($_POST['but5'])){
	echo"<h1 align=center>B</h1>";
	$sql="INSERT INTO sum (backward) VALUES('B')";
	if(!mysqli_query($conn,$sql))
{
	echo'not insert';
	
}
else {
	echo'insert';
	
}
}


?>
<html>
<body>
<style>


#back {

  padding: 10px 10px;
  text-align: center;
  font-size: 16px;
  cursor: pointer;
  margin: 10%;
  position: absolute;
  top: 10%;
  left:38%;
background-color: white; 
  color: black; 
  border: 3px solid black;

}
</style>

<form action="controlpanel.html">
<button id="back">BACK!</button>
</form>
</body>
</html>
