<?php session_start(); ?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("hotel_management_project", $con);
$sql="SELECT * FROM admin WHERE Email='$_POST[email]' and Pass='$_POST[password]'";

$result=mysql_query($sql);
$count=mysql_num_rows($result);

if($count==1){
$row = mysql_fetch_array($result);
$_SESSION['chondrima'] = $row['Email'] ;
header("location:administration.php");
}
else {
//echo "Wrong Username or Password";
//print "Wrong Username or Password";
header("location:admin.php");
}
?>
