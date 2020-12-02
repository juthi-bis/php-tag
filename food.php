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
#table_menu { text-align:center; }
table { background-color:rgba(255,0,0,0.3);
        position:relative;
	    margin-top:5%;
	    left:250px;}
table ,th, td {border: 1px solid black;
      border-collapse:collapse;
	  text-align:center;
	  padding-left:15px;
	   padding-right:15px;
	  width:200px;}
th {font-size:20px;}
</style>
</head>

<body>
<header>
    <nav id="header-nav" class="navbar navbar-default navbar-fixed-top">
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
<img class="img1" src="image/burger.jpg" height="325" width="325" />
<img class="img2" src="image/pizza.png" height="325" width="325" />
<img class="img3" src="image/fruit-juice-a.jpg" height="325" width="325" />
<img class="img4" src="image/drinks.jpg" height="325" width="325" />

<h3 class="header1">RESTAURENTS & BAR</h3>
<section id="table_menu">
<table>
   <tr>
     <th>MENU</th>
     <th>TK</th>
   </tr>
   <tr>
     <td>Chicken Pizza</td>
     <td>50.00</td>
   </tr>
   <tr>
     <td>Beef Pizza</td>
     <td>60.00</td>
   </tr>
   <tr>
     <td>Mutton Pizza</td>
     <td>65.00</td>
   </tr>
   <tr>
     <td>Burgar</td>
     <td>60.00</td>
   </tr>
   <tr>
     <td>Chicken Roll</td>
     <td>50.00</td>
   </tr>
   <tr>
     <td>Rajshahi Sweet</td>
     <td>50.00</td>
   </tr>
   <tr>
     <td>Faluda</td>
     <td>40.00</td>
   </tr>
   <tr>
     <td>Drinks</td>
     <td>15.00</td>
   </tr>
 </table>
 </section>

</body>
</html>  