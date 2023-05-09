<?php
$servername = "localhost";
$username = "stud";
$password = "kalidas";
$dbname = "regi";

$a=5;

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: ");
}


$name= $_GET["uname"];
$dob=$_GET["birthday"];
if ($_GET["gender"]="Male")
	$gender=1;
else
	$gender=0;
    $guardian=$_GET["gnname"];
$address=$_GET["ADDRESS"];
$branch=$_GET["branch"];
$semister=$_GET["semi"];

$sql = "INSERT INTO `student` (`name`, `dob`, `gender`, `guardian`, `address`, `branch`, `semister`) VALUES ('.$name.', '.$dob.', '.$gender.','.$guardian.', '.$address.', '.$branch.', '.$semister.')";


echo "<br>";
if($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
