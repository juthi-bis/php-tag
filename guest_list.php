<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Your Dream Hotel</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- Latest compiled and minified CSS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- jQuery library -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!-- Latest compiled JavaScript -->
	<link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:600" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
<style>
h2 {text-align:center;
    color:#33F;font-size:22px;}
table {margin-left: auto; margin-right: auto;}	
table, th, td
{
  padding: 5px;
}
</style>	
</head>

<body>
<header>
    <nav id="header-nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <a href="Home.html" class="pull-left visible-md visible-lg">
            <div id="logo-img"><img src="image/Radisson_Blu_logo.png"/></div>
          </a>
		  
		  <div class="navbar-brand">
            <a href="Home.html"><h1>Radisson Blu Chittagong Bay View</h1></a>
          </div>
		  
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>

        <div id="collapsable-nav" class="collapse navbar-collapse">
           <ul id="nav-list" class="nav navbar-nav navbar-right">
		   <li>
              <a href="Home.html">
                <span class="glyphicon glyphicon-home"></span><br class="hidden-xs"> Home</a>
            </li>
			<li>
              <a href="room.php">
                <span class="glyphicon glyphicon-bed"></span><br class="hidden-xs"> Rooms</a>
            </li>
            <li>
              <a href="food.php">
                <span class="glyphicon glyphicon-cutlery"></span><br class="hidden-xs"> Menu</a>
            </li>
            <li>
              <a href="login.php">
                <span class="glyphicon glyphicon-log-in"></span><br class="hidden-xs"> Log In</a>
            </li>
			<li>
              <a href="admin.php">
                <span class="glyphicon glyphicon-user"></span><br class="hidden-xs"> Admin </a>
            </li>
			
          </ul><!-- #nav-list -->
        </div><!-- .collapse .navbar-collapse -->
      </div><!-- .container -->
    </nav><!-- #header-nav -->
  </header>
<h2><em>Guest List</em></h2>
<br>
<?php
$con = mysql_connect("localhost","root","");
if(!$con)
{
 die("Could not connect:".mysql_error());
}
mysql_select_db("hotel_management_project",$con);
$result = mysql_query("SELECT a.Guest_id,Name,Room_no,City,Nationality,Check_in_date,Check_out_date,Contact FROM accomodation_guest_room as a join accomodation_guest_address as b on a.Guest_id=b.Guest_id LEFT JOIN accomodation_guest_info as c on b.Guest_id=c.Guest_id");

echo "<table border='1'>";
echo "<tr>
<th>Guest_id</th>
<th>Name</th>
<th>Room_no</th>
<th>City</th>
<th>Nationality</th>
<th>Check_in_date</th>
<th>Check_out_date</th>
<th>Contact</th>
</tr>
";

while($row = mysql_fetch_array($result))
{ 
  echo "<tr>";
  echo "<td>".$row['Guest_id']."</td>";
  echo "<td>".$row['Name']."</td>";
  echo "<td>".$row['Room_no']."</td>";
  echo "<td>".$row['City']."</td>";
  echo "<td>".$row['Nationality']."</td>";
  echo "<td>".$row['Check_in_date']."</td>";
  echo "<td>".$row['Check_out_date']."</td>";
  echo "<td>".$row['Contact']."</td>";
  echo "</tr>";
}
echo "</table>";
mysql_close($con);
?>
</body>
</html>
