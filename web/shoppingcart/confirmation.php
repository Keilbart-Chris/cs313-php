<?php
session_start();

$first = htmlspecialchars($_POST["first "]);
$last = htmlspecialchars($_POST["last"]);
$address = htmlspecialchars($_POST["address"]);
$city = htmlspecialchars($_POST["city"]);
$state = htmlspecialchars($_POST["state"]);
$zip = htmlspecialchars($_POST["zip"]);

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
   
   <p>You have purchased the following items</p><br>
   
   <?php if(isset($_SESSION['cart'])): ?>
      <?php foreach($_SESSION['cart']as $id => $quantity): ?>
         <p><?=$id?> (<?=$quantity?>)</p>;
      <?php endforeach;?>
   <?php else: ?>
      <p>Nothing was purchased</p>
   <? endif; ?>
   
   <p>The items will be sent to:</p>
   
   <p><?=$first?> <?=$last?></p>
   <p><?=$address?></p>
   <p><?=$city?>, <?=$state?> <?=$zip?></p>
   
  
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>