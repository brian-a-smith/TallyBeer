<html>
<head>
<title>TallyBeer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
h2{
	text-align: center;
	color: white;
	text-shadow: 2px 2px #003300;
}
body{
	text-align: center;
	color:white;
	text-shadow: 2px 2px #003300;
}
h3{text-align: left;}
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://media.xconomy.com/wordpress/wp-content/images/2015/03/06181242/Beer-stock-photo.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #333;
    color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>
</head>
<body background="https://media.xconomy.com/wordpress/wp-content/images/2015/03/06181242/Beer-stock-photo.jpg">

<h2><p style="font-size:45px"> Breweries </p></h2>

<ul>
  <li><a href="http://localhost:8080/tallbeer1/public%20docs/tallybeer.html">Home</a></li>
  <li class="dropdown">
  	<a href="http://localhost:8080/tallbeer1/public%20docs/breweries.php" class="dropbtn">Breweries</a>
  	<div class="dropdown-content">
  		<a href="#">DEEP</a>
  		<a href="#">GrassLands</a>
  		<a href="#">Lake Tribe</a>
  		<a href="#">Ology</a>
  		<a href="#">Proof</a>
  	</div>
  </li>
  <li><a href="http://localhost:8080/tallbeer1/public%20docs/beers.php">Beers</a></li>
  <li><a href="http://localhost:8080/tallbeer1/public%20docs/addbrewery.php">Add a Beer</a></li>
</ul>


<?php
//connect to the database
require_once('../mysqli_connect.php');

//create a query
$query = "SELECT Name, Address FROM breweries";

$response = @mysqli_query($dbc, $query);

if($response){
	echo '<h3><p style="font-size:40">';
	echo '<table align="center"
	cellspacing="5" cellpadding="8">

	<tr><td align="left"><b>Name</b></td>
	<td align="left"><b>Address</b></td></tr>';

	while($row = mysqli_fetch_array($response)){

		echo '<tr><td align="left">' .
		$row['Name'] . '</td><td align="left">' .
		$row['Address'] . '</td><td align="left">';

		echo '</tr>';
	}

	echo '</table>';
	echo '</p></h2>';
}

else{
	echo "Couldn't issue database query";

	echo ("Error description: " . mysqli_error($dbc));
}

mysqli_close($dbc);
?>

</body>
</html>