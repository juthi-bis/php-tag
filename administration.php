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
#list a:link , #list a:visited { text-decoration:none;
         color: #FFFFFF;
		 padding:3px;
		 text-transform: uppercase;}
#list a:hover {background-color: #700000;
padding:10px;}
#guest_info a {color:#000000;} 
#list {text-align:center;} 
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
<div id="list">  
<a style="color:#000000;background-color:#99CCCC" href="guest_list.php" id="guest_info">Guest List</a><br /><br />
<a style="color:#000000;background-color:#99CCCC" href="foreign_guest.php" id="guest_info">Foreign Guest List</a><br /><br />
<a style="color:#000000;background-color:#99CCCC" href="query1.php" id="guest_info">Total Num of Guest who took Newspapaper service & Total Num of Newspaper sold 10/11/16</a><br /><br />
<a style="color:#000000;background-color:#99CCCC" href="query2.php" id="guest_info">Total Amount of Newspaper Service of each guest</a><br /><br />
<a style="color:#000000;background-color:#99CCCC" href="query3.php" id="guest_info">Room Availibility</a><br /><br />
<a style="color:#000000;background-color:#99CCCC" href="query4.php" id="guest_info">Total cost of Guest_id 40</a><br /><br />
<br>
<input type="button" value="Edit database" onclick="window.location.href='edit_form.php'">
</div>
</body>
</html>
