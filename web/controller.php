<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$continent = $_POST["continent"];
$comments = htmlspecialchars($_POST["comments"]);


	<p>Name: <?php echo $_POST["name"]; ?></p>
	<p>Email: <?php echo $_POST["email"]; ?></p>
	<p>Major: <?php echo $_POST["major"]; ?></p>
   <p>Places visited: </p>

<ul>

<? 
foreach ($continent as $visited) 
{
   $visited_clean = htmlspecialchars($place);
   echo "<li><p>$visited_clean</p></li>"; 
}
?>

</ul>

   <p>Comments: <?php =$name ?></p>


</body>
</html>