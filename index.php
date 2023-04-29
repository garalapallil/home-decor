<!DOCTYPE html>
<html>
<head>
<title>HOME DECOR WEBSITE</title>
</head>
<body>
<!-- Header section -->
<header>
   <h1>Welcome to our HomeDecor Website!</h1>
   <p>"Transform your home, Elevate your life"</p>//tagline
   <img src="images/logo.jpg" alt="logo">
   <p> we are delighted to have you here and excited to share with you our extensive collection of home decor items that can transform any living space into a beautiful and inviting home.
from elegant furnishings to stunning decorative accents, we have everything you need to create your dream home.
thank you for choosing us as your go-to homedecor destination. 
HAPPY SHOPPING!.</p>
</header>



<!-- Navigation Bar -->
<nav>
 <ul> 
   <li><a href="about.php">About us</a></li>
   <li><a href="contact.php">Contact us</a></li>
   <li><a href="registration.php">register here</a></li>
   <li><a href="admin_login.php">admin login</a></li>
   <li><a href="buyitems.html">Buy here</a></li>
   <li><a href="action.html">user details</a><li>
 </ul>
 
</nav>
  <h2>Products</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      
    </tr>
    <?php
    // Get the list of product files
    $product_files = glob("products/*.txt");

    // Loop through the product files
    foreach ($product_files as $product_file) {
      // Get the product data
      $data = explode("\n", file_get_contents($product_file));
      $id = $data[0];

      // Display the product in a table row
      echo "<tr>";
      echo "<td>$id</td>";
      echo "<td>$data[1]</td>";
      echo "<td>$data[2]</td>";
      echo "<td>$data[3]</td>";
      
      echo "</tr>";
    }
    ?>
  </table>

<!-- Main section -->
<h2>Latest products</h2>
 
 <div id="slideshow">
 <img src="images/homedecor.jpg" alt="category 1 (home decor)">
 <img src="images/dining.jpg" alt="category 2 (kitchen and dining)">
 <img src="images/textile.jpg" alt="category 3 (home textiles)">
 <img src="images/flowers and greens.jpg" alt="category 4 (flowers and greens)" >
 <img src="images/bar and drinkware.jpg" alt="category 5 (bar and drinkware)">
 <img src="images/leather accesories.jpg" alt="category 6 (leather accesories)">
 <img src="images/bath and more.jpg" alt="category 7 (bath and more)">
 <img src="images/furniture.jpg" alt="category 8 (furniture)">
 <img src="images/gift store.jpg" alt="category 9 (gift store)">
 </div>
 
 <!-- Footer Section -->
        <footer>
             <p>Contact Information:</p>
             <ul>
                 <li>Email: myemail@exam.com</li>
                 <li>phone: 8888888888</li>
                 
                 href="#">Linkedin </a>,<a
                 href="#">Twitter</a>,<a></li>
                 
                 </ul>
                 <p>Copyright &copy;2023 veda
                 </p>
                 </footer>
 <script>
 var slideIndex = 0;
 showslides();
 
 function showslides() {
 var i;
 var slides = document.getElementById("slideshow").getElementByTagName("img");
 for (i=0; i< slides.length; i++){
    slides[i].style.display ="none";
 }
 slideIndex++;
 if(slideIdex > slides.length) {
 slideIndex=1;
 }
 slides[slideIndex-1].style.display="block";
 setTimeout(showSlides, 3000);//change image every 3 seconds
 }
 </script>
 



