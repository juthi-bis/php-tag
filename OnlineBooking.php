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
body {background-image:url('image/paper.gif');}
form {text-align:center;}
p {text-align:center;
    color:#33F;}
table {margin-left: auto; margin-right: auto;}	
table, th, td
{
  border: 0;
}
tr.row2 td {
    padding-top: 15px;
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
<h2 align="center" style="color:#F00"><em>Online Booking !!</em></h2>
<br>
<form action="OnlineBooking_check.php" method="post">
Name: <input type="text" name="firstname" size="30" required/><br></br>

Room/Suite Type:&nbsp;<select name="room_type">
  <option>Exclusive</option>
  <option>Deluxe</option>
  <option>Business</option>
</select>
<br><br>
Number of room/suite required:&nbsp;<select name="room_num">
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10+</option>
</select>
<br><br>
Number of Persons:&nbsp;<select name="person_num" required>
  <option>1</option>
  <option>2</option>
  <option>3</option>
  <option>4</option>
  <option>5</option>
  <option>6</option>
  <option>7</option>
  <option>8</option>
  <option>9</option>
  <option>10+</option>
  </select>
<br><br>
Number of Children ( if any ):&nbsp;<select name="child_num" required>
  <option>0</option>
  <option>1</option>
  <option>2</option>
  <option>3+</option>
  </select>
<br><br>
Any special request?:&nbsp;<textarea name="request"></textarea>
<br><br>
Check-in Date (dd-mm-yyyy): <input name="check_in_date">
<br><br>	  	
Check-out Date (dd-mm-yyyy):<input name="check_out_date">
<br><br>
Contact: <input type="text" name="contact" size="30" required/><br>
	<br><br> 
<input type="submit" value="Send">
</form>
<!--<br>
<form action="delete_form.php" method="post">
<input type="submit" value="Remove Account"/>
</form>-->

</body>
</html>