<!DOCTYPE html>
<html>
 <head>
   <title>Checkout Page</title>
</head>
<body> 
   <h1>Checkout</h1>
   <?php
     $product =$_GET['product'];
     $price =0;
     
     switch($product) {
       case 'product1':
         $price =10;
         break;
       case 'product2':
         $price =15;
         break;
       case 'product3':
         $price =20;
         break;
       default:
         echo "Invalid Product";
         exit;
       }
       
       echo "<p>Product: $product</p>";
       echo "<p>Price: $$price</p>";
       ?>
       
       <form method="POST" action="process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <br>
        <label for="card_number">Card Number:</label>
        <input type="text" name="card_number" required>
        <br>
        <label for="expiry_date">Expiry Date:</label>
        <input type="text" name="expiry_date" placeholder="MM/YY" required>
        <br>
        <label for="cvv">CVV:</label>
        <input type="text" name="cvv" required>
        <br>
        <inputtype="hidden" name="product" value="<?php echo $product; ?>">
        <inputtype="hidden" name="price" value="<?php echo $price; ?>">
        <inputtype="submit" value="Pay Now">
        </form>
      </body>
    <html>
        
        
       

