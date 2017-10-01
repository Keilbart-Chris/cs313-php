<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart</title>
   <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
</head>
<body>

   <header role="banner" id="header">
      <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header.php'; ?>
   </header>
	<nav role="navigation" class="navfooter">
          <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav1.php'; ?>
   </nav>
   <h4>Billing Information:</h4>
   <form method="post" action="checkout.php">
      <label>First Name</label><br>
      <input type="text" name="first" placeholder="first name"><br>
      <label>Last Name</label><br>
      <input type="text" name="last" placeholder="last name"><br>
      <label>Email</label><br>
      <input type="text" name="email" placeholder="example@domain.com"><br>
      <label>Street Address</label><br>
      <input type="text" name="address" placeholder="street address"><br>
      <label>City</label><br>
      <input type="text" name="city" placeholder="city"><br>
      <label>State</label><br>
      <input type="text" name="state" placeholder="state"><br>
      <label>Zip Code</label><br>
      <input type="text" name="zip" placeholder="zip code"><br>
      <label>Phone<label><br>
      <input type="text" name="phone" placeholder="phone"><br><br>
      <input type="submit" name="SUBMIT">
   </form>
   
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>