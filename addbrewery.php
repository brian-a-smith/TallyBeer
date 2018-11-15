<html>
<head>
<title>TallyBeer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style type="text/css">
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
    background-image: url('https://media.xconomy.com/wordpress/wp-content/images/2015/03/06181242/Beer-stock-photo.jpg');
    min-height: 100%;
    background-position: center;
    background-size: cover;
}
</style>
</head>
<body>

<form action="http://localhost:8080/tallbeer1/public%20docs/beeradded.php" method="post">
	<b>Add a New Beer</b>

	<p>Name:
	<input type="text" name="BeerName" size="30" value="" />
	</p>

	<p>Brewery:
	<input type="text" name="Brewery" size="30" value="" />
	</p>

	<p>ABV:
	<input type="text" name="ABV" size="30" value="" />
	</p>

	<p>Beer Type:
	<input type="text" name="BeerType" size="30" value="" />
	</p>

	<p>
	<input type="submit" name="submit" value="Send" />
	</p>


</form>
</body>
</html>