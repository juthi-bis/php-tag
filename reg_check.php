<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$firstname = $_POST["firstname"];
$userid = $_POST["userid"];
$password = $_POST["pass"];
$gender = $_POST["gender"];
$date = $_POST["date"];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hotel_management_project", $con);
$sql = "INSERT INTO registration (Name, Username, Password, Gender, Date)   values('$firstname','$userid','$password','$gender','$date')";
//echo $sql;
mysql_query($sql);
echo "<script>alert('Registration Complete');window.location = './login.php';</script>";
mysql_close($con);
?>
</body>
</html>