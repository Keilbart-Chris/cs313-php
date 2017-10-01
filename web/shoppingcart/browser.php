<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Browser</title>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>

   <header role="banner" id="header">
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
   </header>
   <nav role="navigation" class="navfooter">
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav1.php'; ?>
   </nav>
   <h2 id="props">Available Props:</h2>
   <table id="tab1">
      <tr>
         <th> </th>
         <th> Image </th>
         <th> Price </th>
      </tr>
      <tr>
         <td>
            <form method="post" action="viewcart.php" id="item1">
            <a href="#" class="bton" onclick="document.getElementById('item1').submit()">Add to Cart</a>
            </form>
         </td>
         <td>
            <input type="checkbox" name="item[]" value="Pl" id="thing-pl"><label for = "thing-pl" >Plasma Grenade</label>
         </td>
         <td>
            <p>$49.99</p>
         </td>
      <img src="/images/plasma.jpg"  id="plasma"><br>
		<input type="checkbox" name="item[]" value="H" id="thing-h"><label for = "thing-h" >Helmet</label><br>
		<img src="/images/spartanhelmet.jpg" id="helmet"><br>
      <input type="checkbox" name="item[]" value="Pi" id="thing-pi"><label for = "thing-pi" >Pistol</label><br>
		<img src="/images/halopistol.jpg" id="pistol"><br>
      <input type="checkbox" name="item[]" value="C" id="thing-c"><label for = "thing-c" >Caster Gun</label><br>
		<img src="/images/caster.jpg" id="caster"><br>
      <input type="checkbox" name="item[]" value="Bu" id="thing-bu"><label for = "thing-bu" >Buster Sword</label><br>
      <img src="/images/buster.jpg" id="buster"><br>
      <input type="checkbox" name="item[]" value="Ar" id="thing-ar"><label for = "thing-ar" >Assault Rifle</label><br>
		<img src="/images/assaultrifle.jpg" id="ar"><br>
		<input type="submit" name="SUBMIT">

   
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>