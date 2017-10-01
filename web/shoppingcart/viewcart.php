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
         <form method="post" action="viewcart.php" id="item1">
            <a href="#" class="bton" onclick="document.getElementById('item1').submit()">Remove from Cart</a>
         </form>
      <?php endforeach;?>
   <?php else: ?>
      <p>Cart is empty</p>
   <? endif; ?>
   
   <table>
      <tr>
         <button>
            <a href="/shoppingcart/browser.php">Continue Shopping</a>
         </button>
      </tr>
      <tr>
         <button>
            <a href="#"
   
   
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>