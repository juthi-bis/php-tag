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
  
<img class="img1" src="image/room2.jpg" height="325" width="325" />
<img class="img2" src="image/room4.jpg" height="325" width="325" />
<img class="img3" src="image/room5.jpg" height="325" width="325" />
<img class="img4" src="image/rooms-banner.jpg" height="325" width="325" />

<h3 class="header1" id="header">Prices of Exclusive ACs</h3>
<table class="table1">
   <tr>
     <th>Bed Type</th>
     <th>Published Price(TK.)</th>
     <th>Promotional Price(TK.)</th>
   </tr>
   <tr>
     <td>Exclusive Single</td>
     <td>2500.00</td>
	 <td>2000.00</td>
   </tr>
   <tr>
     <td>Exclusive Double</td>
     <td>3000.00</td>
	 <td>2700.00</td>
   </tr>
   <tr>
     <td>Exclusive Twin</td>
     <td>3500.00</td>
	 <td>3200.00</td>
   </tr>
 </table>
 
 <h3 class="header2" id="header">Prices of Deluxe ACs</h3>
<table class="table2">
   <tr>
     <th>Bed Type</th>
     <th>Published Price(TK.)</th>
     <th>Promotional Price(TK.)</th>
   </tr>
   <tr>
     <td>Deluxe Single</td>
     <td>3500.00</td>
	 <td>3200.00</td>
   </tr>
   <tr>
     <td>Deluxe Double</td>
     <td>4500.00</td>
	 <td>4000.00</td>
   </tr>
   <tr>
     <td>Deluxe Twin</td>
     <td>6000.00</td>
	 <td>5800.00</td>
   </tr>
 </table>
 
 <h3 class="header3" id="header">Prices of Business Class ACs</h3>
<table class="table3">
   <tr>
     <th>Bed Type</th>
     <th>Published Price(TK.)</th>
     <th>Promotional Price(TK.)</th>
   </tr>
   <tr>
     <td>Business Class Single</td>
     <td>6500.00</td>
	 <td>6200.00</td>
   </tr>
   <tr>
     <td>Business Class Double</td>
     <td>7500.00</td>
	 <td>7200.00</td>
   </tr>
   <tr>
     <td>Business Class Twin</td>
     <td>8000.00</td>
	 <td>7800.00</td>
   </tr>
 </table>
</body>
</html>