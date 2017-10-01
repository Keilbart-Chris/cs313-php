<?php
session_start();

if($_POST) {
   if(isset($_POST['id'])) {
      if(!isset($_SESSION['cart'])) {
         $_SESSION['cart'] = [];
      }
      $itemId=$_POST['id'];
      if(isset($_SESSION['cart'][$itemId])) {
         $_SESSION['cart'][$itemId]++;
      }
      else {
         $_SESSION['cart'][$itemId]=1;
      }
      $message = 'Item successfully added to cart';
   }
}

?>

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
   
   <?php if(isset($message)): ?>
   <p><?=$message ?></p>
   <?php endif; ?>
   
   <h2 id="props">Available Props:</h2>
   <table>
      <tr>
         <th> Name  </th>
         <th class="shrink"> Image </th>
         <th> Price </th>
         <th> </th>
      </tr>
      <tr>
         <td>
            <p class="itemName">Plasma Grenade</p>
         </td>
         <td class="shrink">
            <img src="/images/plasma.jpg"  class="images">
         </td>
         <td>
            <p class="price">$49.99</p>
         </td>
         <td>
            <form method="post" action="browser.php" id="item1">
            <input type="hidden" name="id" value="Plasma Grenade">
            <a href="#" class="bton" onclick="document.getElementById('item1').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
      <tr>
         <td>
            <p class="itemName">Spartan Helmet</p>
         </td>
         <td class="shrink">
            <img src="/images/spartanhelmet.jpg" class="images">
         </td>
         <td>
            <p class="price">$249.99</p>
         </td>
         <td >
            <form method="post" action="browser.php" id="item2">
            <input type="hidden" name="id" value="Spartan Helmet">
            <a href="#" class="bton" onclick="document.getElementById('item2').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
      <tr>
         <td>
            <p class="itemName">Pistol</p>
         </td>
         <td class="shrink">
            <img src="/images/halopistol.jpg" class="images">
         </td>
         <td>
            <p class="price">$99.99</p>
         </td>
         <td>
            <form method="post" action="browser.php" id="item3">
            <input type="hidden" name="id" value="Pistol">
            <a href="#" class="bton" onclick="document.getElementById('item3').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
      <tr>
         <td>
            <p class="itemName">Caster</p>
         </td>
         <td class="shrink">
            <img src="/images/caster.jpg" class="images">
         </td>
         <td>
            <p class="price">$199.99</p> 
         </td>
         <td>
            <form method="post" action="browser.php" id="item4">
            <input type="hidden" name="id" value="Caster">
            <a href="#" class="bton" onclick="document.getElementById('item4').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
      <tr>
         <td>
            <p class="itemName">Buster Sword</p>
         </td>
         <td class="shrink">
            <img src="/images/buster.jpg" class="images">
         </td>
         <td>
            <p class="price">$299.99</p>
         </td>
         <td>
            <form method="post" action="browser.php" id="item5">
            <input type="hidden" name="id" value="Buster Sword">
            <a href="#" class="bton" onclick="document.getElementById('item5').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
      <tr>
         <td>
            <p class="itemName">Assault Rifle</p>
         </td>
         <td class="shrink">
            <img src="/images/assaultrifle.jpg" class="images">
         </td>
         <td>
            <p class="price">$249.99</p>
         </td>
         <td>
            <form method="post" action="browser.php" id="item6">
            <input type="hidden" name="id" value="Assault Rifle">
            <a href="#" class="bton" onclick="document.getElementById('item6').submit()">Add to Cart</a>
            </form>
         </td>
      </tr>
   </table>
         
   <footer role="contentinfo" class="navfooter">
      <div>
         <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>
         <?php echo date('j F, Y', getlastmod()) ?>
      </div>
   </footer>
</body>
</html>