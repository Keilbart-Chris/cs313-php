<?php

$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$major = htmlspecialchars($_POST["major"]);
$continent = $_POST["continent"];
$comments = htmlspecialchars($_POST["comments"]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


	<p>Name: <?=$name ?></p>
	<p>Email: <a href="mailto:<?=$email ?>"><?=$email?></a></p>
	<p>Major: <?=$major ?></p>
   <p>Places visited: </p>

<ul>

<?php
foreach ($continent as $visited) 
{
   $visited_clean = htmlspecialchars($place);
   echo "<li><p>$visited_clean</p></li>"; 
}
?>

</ul>

   <p>Comments: <?=$comments?></p>


</body>
</html>