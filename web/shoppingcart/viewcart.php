<?php
session_start();

if($_POST) {
   if(isset($_POST['id'],$_POST['quantity'])) {
      $itemId=$_POST['id'];
      if(!isset($_SESSION['cart'])) {
         $_SESSION['cart'] = [];
      }
      if(isset($_POST['update'])) {
         $_SESSION['cart'][$itemId]=intval($_POST['quantity']);
         $message = 'Cart updated';
      }
      else if(isset($_POST['remove'])) {
         unset($_SESSION['cart'][$itemId]);
         $message = 'Item successfully removed from cart';
      } 
   }
}
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
   
   <?php if(isset($message)): ?>
   <p><?=$message ?></p>
   <?php endif; ?>
   
   <?php if(isset($_SESSION['cart'])): ?>
      <?php foreach($_SESSION['cart']as $id => $quantity): ?>
            <form method="post" action="viewcart.php">
            <p><?=$id?></p>
            <input type="number" value="<?=$quantity?>" id="quantity" min="0" max="10">
            <input type="hidden" value="<?=$id?>" name="id">
            <button type="submit" name="update" value="up/down">Update</button>
            <button type="submit" name="remove" value="emptied">Remove</button>
         </form>
      <?php endforeach;?>
   <?php else: ?>
      <p>Cart is empty</p>
   <? endif; ?>
   
   <button>
      <a href="/shoppingcart/browser.php">Continue Shopping</a>
   </button>
   <button>
      <a href="/shoppingcart/checkout.php">Checkout</a>
   </button>
      
   
   
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>