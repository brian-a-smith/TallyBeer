<html>
<head>
<title> Add Beer </title>
</head>
<body>
<?php

if(isset($_POST['submit'])){
	
	$data_missing = array();
	$id= NULL;
	$rating= NULL;
	if(empty($_POST['BeerName'])){
		$data_missing[] = 'Beer Name';
	}
	else{
		$beerName = trim($_POST['BeerName']);
	}

	if(empty($_POST['Brewery'])){
		$data_missing[] = 'Brewery';
	}
	else{
		$brewName = trim($_POST['Brewery']);
	}

	if(empty($_POST['ABV'])){
		$data_missing[] = 'ABV';
	}
	else{
		$abv = trim($_POST['ABV']);
	}

	if(empty($_POST['BeerType'])){
		$data_missing[] = 'Beer Type';
	}
	else{
		$type = trim($_POST['BeerType']);
	}

	if(empty($data_missing))
	{
		require_once('../mysqli_connect.php');
		$query = "INSERT INTO beers (BeerID, BeerName, Brewery, ABV, BeerType, Rating) VALUES (?, ?, ?, ?, ?, ?)";

		$stmt = mysqli_prepare($dbc, $query);

		mysqli_stmt_bind_param($stmt, 'issssi', $id, $beerName, $brewName, $abv, $type, $rating);

		mysqli_stmt_execute($stmt);

		$affected_rows = mysqli_stmt_affected_rows($stmt);

		if($affected_rows == 1)
		{
			echo 'Beer added.';

			mysqli_stmt_close($stmt);

			mysqli_close($dbc);
		}

		else{

			echo 'Error Occurred<br />';

			echo mysqli_error($dbc);

			mysqli_stmt_close($stmt);

			mysqli_close($dbc);
		}

	} else {

		echo 'You need to enter the following data<br />';

		foreach($data_missing as $missing){

			echo "$missing<br />";

		}
	}
}
?>

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