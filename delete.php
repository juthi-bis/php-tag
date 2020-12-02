
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$id = $_POST["username"];
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hotel_management_project", $con);
// sending query
mysql_query("DELETE FROM registration WHERE Username = '$id'");  	
echo "<script>alert('Your account is deleted');window.location = './login.php';</script>";
mysql_close($con);
?>
</body>
</html>