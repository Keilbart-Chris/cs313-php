<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form method="post" action="viewcart.php">
		
		<label>Available Props:</label><br>
		<input type="checkbox" name="item[]" value="Pl" id="thing-pl"><label for = "thing-pl" >Plasma Grenade</label><br>
		<input type="checkbox" name="item[]" value="H" id="thing-h"><label for = "thing-h" >Helmet</label><br>
		<input type="checkbox" name="item[]" value="Pi" id="thing-pi"><label for = "thing-pi" >Pistol</label><br>
		<input type="checkbox" name="item[]" value="C" id="thing-c"><label for = "thing-c" >Caster Gun</label><br>
		<input type="checkbox" name="item[]" value="Bu" id="thing-bu"><label for = "thing-bu" >Buster Sword</label><br>
      <input type="checkbox" name="item[]" value="Ar" id="thing-ar"><label for = "thing-ar" >Assault Rifle</label><br>
		
		<input type="submit" name="ADD">


	</form>
</body>
</html>