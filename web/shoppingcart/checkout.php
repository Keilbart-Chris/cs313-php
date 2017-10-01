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
      <label>First Name</label>
      <input type="text" name="first" placeholder="first name">
      <label>Last Name</label>
      <input type="text" name="first" placeholder="last name">
      <label>Street Address</label>
      <input type="text" name="first" placeholder="street address">
      <label>City</label>
      <input type="text" name="first" placeholder="city">
      <label>State</label>
      <input type="text" name="first" placeholder="state">
      <label>Zip Code</label>
      <input type="text" name="first" placeholder="zip code">
      <label>Phone<label>
      <input type="text" name="first" placeholder="phone">
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