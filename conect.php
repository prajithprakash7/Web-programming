<?php

$conn= mysqli_connect("localhost","root","","college");
if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

echo "The POST assoc array values are --<br>";
print_r($_POST);

if (isset($_POST['submit']))
{

  $name = $_POST['fname'];
  $date = $_POST['date'];
  $style = $_POST['style'];
  echo "Name: ".$name.'<br>';
  echo "Date: ".$date.'<br>';
  echo "style: ".$style.'<br>';
 
}
