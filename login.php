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
<br>
<h2 align="center" style="color:#F00"><em>SignIn Here !!</em></h2>
<br>
<form action="log_check.php" method="post">
<table>
<tr><td>UserName:</td><td><input type="text" name="Username" size="30" required/><br/></td></tr>
<tr class="row2"><td>Password:</td><td><input type="password" name="Password" size="30" required/></td></tr>
</table>
<br/>
<input type="submit" value="login"/>
</form>
<br> 
<p>Don't have an account? Click the following button for registration.</p>
<br> 
<form action="reg_info.php">
<input type="submit" value="registration"/>
</form>
</body>
</html> 