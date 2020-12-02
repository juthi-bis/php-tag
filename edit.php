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
	form {text-align:center;}
	table, th, td
{
  border: 0;
}
table {margin-left: auto; margin-right: auto;}	

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
<?php
require("db.php");
$id =$_POST['guest_id'];

$result = mysql_query("SELECT Guest_id,Name,Contact FROM accomodation_guest_info WHERE Guest_id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$guest_id=$test['Guest_id'] ;
				$name= $test['Name'] ;					
				$contact=$test['Contact'] ;

if(isset($_POST['save']))
{	
	$id_save = $_POST['guest_id'];
	$name_save = $_POST['fname'];
	$contact_save = $_POST['contact'];

	mysql_query("UPDATE accomodation_guest_info SET Guest_id ='$id_save', Name ='$name_save',
		 Contact ='$contact_save' WHERE Guest_id = '$id'")
				or die(mysql_error()); 
echo "<script>alert('Saved');window.location = './edit_form.php';</script>";
	
	//header("Location: edit_form.php");			
}
mysql_close($conn);
?>
<form action="edit.php" method="post">
<table>
	<tr>
		<td>Guest_id:</td>
		<td><input type="text" name="guest_id" value="<?php echo $guest_id ?>"/></td>
	</tr>
	<tr>
		<td>Name:</td>
		<td><input type="text" name="fname" value="<?php echo $name ?>"/></td>
	</tr>
	<tr>
		<td>Contact:</td>
		<td><input type="text" name="contact" value="<?php echo $contact ?>"/></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="save" value="save" /></td>
	</tr>
</table>
</form>
</body>
</html>
