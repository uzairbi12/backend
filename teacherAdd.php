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

$sql = "INSERT INTO Teachers (FirstName, LastName, Address, Email, ClassID, BackgroundCheck) VALUES ('{$_POST['FirstName']}','{$_POST['LastName']}','{$_POST['Address']}','{$_POST['Email']}','{$_POST['classID']}','{$_POST['BackgroundCheck']}')";
try {
  if (mysqli_query($link, $sql)) {
    echo "Success";
  }
}
catch (Exception $e) {
  echo("Error $e");
}

?>