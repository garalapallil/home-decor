<!DOCTYPE html>
<html>
<head>
  <title>Contact Us - Home Decor Website</title>
</head>
<body>
   <h1>Contact us<h1>
   <p> Have a question or comment? Fill out the form below to send us a message:</p>
   
   <?php
     if ($_SERVER["REQUEST_METHOD"]=="POST"){
     $name = $_POST["name"];
     $email = $_POST["email"];
     $message = $_POST["message"];
     
     $to = "homedecor@web.com";
     $subject = "Message from Home Decor Website Contact Form";
     $body = "Name: $name\nEmail: $email\n\n$message";
     $headers ="From: $email";
     
     if(mail($to,$subject,$body,$headers)){
      echo "<p> thank you for your message! We'll get back to you soonas possible.</p>";
      } else{
       echo "<p> Sorry, there was an error sending your message. please try again later.</p>";
       }
       
       }
       ?>
       
       <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"
         <label for="name">Name:</label>
         <input type="text" id="name" name="name" required><br>
         
         <label for="email">Email:</label>
         <input type="email" id="email" name="email" required><br>
         
         <label for="message">Message:</label>
         <textarea  id="message" name="message" required></textarea><br>
         
         
         <input type="submit" value="send">
        </form>
    </body>
    </html>
         
         
       
      
