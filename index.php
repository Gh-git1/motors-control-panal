<!DOCTYPE html>


<?php
require_once('connect.php');

if(isset($_POST['register']))
{
$m1 = $_POST['m1'];
$m2 = $_POST['m2'];
$m3 = $_POST['m3'];
$m4 = $_POST['m4'];
$m5 = $_POST['m5'];

		
		$sql = $con->prepare("INSERT INTO angles (m1,m2,m3,m4,m5) 
		VALUES ('".$m1."','".$m2."','".$m3."','".$m4."','".$m5."')");
	

if (!$sql->execute())
{
  echo "<script type='text/javascript'>
  alert('Error');
  </script>";
}
else
{
  echo "<script type='text/javascript'>
  alert('Motors Values are registered successfully');
 
  </script>";
}
}
?>



<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.slidecontainer {
  width: 70%;
}

.slider {
  -webkit-appearance: none;
  width: 70%;
  height: 15px;
  background: #c3e0eb;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 15px;
  height: 15px;
  background: #0a4961;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 15px;
  height: 15px;
  background: #0a4961;
  cursor: pointer;
}
</style>
</head>
<body>

 <form class="register-form" method="post" action="index.php">
<h1>Motors Control Panal</h1>
<p>Motor1</p>

<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange" name="m1">
  <p>Value1: <span id="demo" name="d1"></span></p>
</div>

<script>
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>


<br>


<p>Motor2</p>

<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange2" name="m2">
  <p>Value2: <span id="demo2" name="d2"></span></p>
</div>

<script>
var slider2 = document.getElementById("myRange2");
var output2 = document.getElementById("demo2");
output2.innerHTML = slider2.value;

slider2.oninput = function() {
  output2.innerHTML = this.value;
}
</script>





<br>


<p>Motor3</p>

<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange3" name="m3">
  <p>Value3: <span id="demo3" name="d3"></span></p>
</div>

<script>
var slider3 = document.getElementById("myRange3");
var output3 = document.getElementById("demo3");
output3.innerHTML = slider3.value;

slider3.oninput = function() {
  output3.innerHTML = this.value;
}
</script>







<br>


<p>Motor4</p>

<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange4" name="m4">
  <p>Value4: <span id="demo4" name="d4"></span></p>
</div>

<script>
var slider4 = document.getElementById("myRange4");
var output4 = document.getElementById("demo4");
output4.innerHTML = slider4.value;

slider4.oninput = function() {
  output4.innerHTML = this.value;
}
</script>


<br>
<p>Motor5</p>

<div class="slidecontainer">
  <input type="range" min="1" max="100" value="50" class="slider" id="myRange5" name="m5">
  <p>Value5: <span id="demo5" name="d5"></span></p>
</div>

<script>
var slider5 = document.getElementById("myRange5");
var output5 = document.getElementById("demo5");
output5.innerHTML = slider5.value;

slider5.oninput = function() {
  output5.innerHTML = this.value;
  
}
</script>

<br>

 <button name="register" type="submit">Save</button></p>
 </form>
 
</body>
</html>
