<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$guest_id = $_POST["guest_id"];
$product1 = $_POST["pno_1"];
$quan1 = $_POST["qno_1"];
/*$product2 = $_POST["pno_2"];
$quan2 = $_POST["qno_2"];
$product3 = $_POST["pno_3"];
$quan3 = $_POST["qno_3"];
$product4 = $_POST["pno_4"];
$quan4 = $_POST["qno_4"];*/
$date = $_POST["date"];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hotel_management_project", $con);
$sql = "INSERT INTO food_order (Guest_id, Product_id, Quantity, Date)   values('$guest_id','$product1','$quan1','$date')";
//echo $sql;
mysql_query($sql);
echo "<script>alert('Order Complete');window.location = './food_order.php';</script>";
mysql_close($con);
?>
</body>
</html>
