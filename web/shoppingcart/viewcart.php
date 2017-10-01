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
   
   
   <?php if(isset($_SESSION['cart'])): ?>
      <?php foreach($_SESSION['cart']as $id => $quantity): ?>
         <p><?=$id?> (<?=$quantity?>)</p>;
      <?php endforeach;?>
   <?php else: ?>
      <p>Cart is empty</p>
   <? endif; ?>
   
   
   <button>
      <a href="/shoppingcart/browser.php">Continue Shopping</a>
   </button>
   
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>