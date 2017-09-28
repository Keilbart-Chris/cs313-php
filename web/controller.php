<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$continents = $_POST["continent"];
$comments = htmlspecialchars($_POST["comments"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<p>Name: <?php echo $_POST["name"]; ?></p>
	<p>Email: <?php echo $_POST["email"]; ?></p>
	<p>Major: <?php echo $_POST["major"]; ?></p>
   <p>Places visited: </p>

<ul>

<?php

foreach ($continents as $continent) 
{
   $continent_clean = htmlspecialchars($continent);
   echo "<li><p>$continent_clean</p></li>"; 
}
?>

</ul>

   <p>Comments: <?php echo $_POST["comments"];?></p>


</body>
</html>