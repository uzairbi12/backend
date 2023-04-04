<?php 

// Database information
$host = "sdb-57.hosting.stackcp.net";
$username = "student31-35303135634f";
$password = "ua92-studentAc";
$dbname = "student31-35303135634f";

//Connect to database
$link = mysqli_connect($host,$username,$password,$dbname);

//Check connection
if ($link === false) {
  die("Connection failed: ");
}

$sql = "INSERT INTO Students (FirstName, LastName, Address, MedicalInformation, ClassID, Parent1ID, Parent2ID) VALUES ('{$_POST['FirstName']}','{$_POST['LastName']}','{$_POST['Address']}','{$_POST['MedicalInfo']}','{$_POST['classID']}','{$_POST['parent1ID']}','{$_POST['parent2ID']}')";
try {
  if (mysqli_query($link, $sql)) {
    echo "Success";
  }
}
catch (Exception $e) {
  echo("Error $e");
}

?>