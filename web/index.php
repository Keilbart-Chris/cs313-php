<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="controller.php">
		<label>Name:</label><br>
		<input type="text" name="name"><br><br>

		<label>Email:</label><br>
		<input type="email" name="email"><br><br>

		<label>Major:</label><br>
		<input type="radio" name="major" value="cs">Computer Science<br>
		<input type="radio" name="major" value="wdd">Web Design and Development<br>
		<input type="radio" name="major" value="cit">Computer information Technology<br>
		<input type="radio" name="major" value="ce">Computer Engineering<br>
		<br><br>

		<label>Continents:</label><br>
		<input type="checkbox" name="continent[]" value="NA" id="place-na"><label for = "place-na" >North America</label><br>
		<input type="checkbox" name="continent[]" value="SA" id="place-sa"><label for = "place-sa" >South America</label><br>
		<input type="checkbox" name="continent[]" value="E" id="place-e"><label for = "place-e" >Europe</label><br>
		<input type="checkbox" name="continent[]" value="A" id="place-a"><label for = "place-a" >Asia</label><br>
		<input type="checkbox" name="continent[]" value="Au" id="place-au"><label for = "place-au" >Australia</label><br>
		<input type="checkbox" name="continent[]" value="Af" id="place-af"><label for = "place-af" >Africa</label><br>
		<input type="checkbox" name="continent[]" value="An" id="place-ant"><label for = "place-ant" >Antarctica</label><br><br>

		<label>Comments:</label><br>
		<input type="textarea" name="comments" rows="5" cols="50"><br>

		<input type="submit" name="SUBMIT">


	</form>
</body>
</html>