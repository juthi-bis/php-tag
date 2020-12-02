<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$firstname = $_POST["firstname"];
$room = $_POST["room_type"];
$no_room = $_POST["room_num"];
$no_person = $_POST["person_num"];
$no_child = $_POST["child_num"];
$request = $_POST["request"];
$check_in_date = $_POST["check_in_date"];
$check_out_date = $_POST["check_out_date"];
$contact = $_POST["contact"];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hotel_management_project", $con);
$sql = "INSERT INTO online_booking(Name, Room_Type, Num_of_Room, Num_of_Person, Num_of_Child, Special_Request, Check_in_date, Check_out_date, Contact)   values('$firstname','$room','$no_room','$no_person','$no_child','$request','$check_in_date','$check_out_date','$contact')";
/*echo $sql;*/
mysql_query($sql);
echo "<script>alert('Booking Complete');window.location = './OnlineBooking.php';</script>";
//echo "Registration Complete";*/
mysql_close($con);
?>
</body>
</html>
