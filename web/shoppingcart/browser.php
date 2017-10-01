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

		<h2>Available Props:</h2><br>
		
      <img src="/images/plasma.jpg"  id="plasma"><br>
		
		<img src="/images/spartanhelmet.jpg" id="helmet"><br>
      
		<img src="/images/halopistol.jpg" id="pistol"><br>
     
		<img src="/images/caster.jpg" id="caster"><br>
      
      <img src="/images/buster.jpg" id="buster"><br>
      
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