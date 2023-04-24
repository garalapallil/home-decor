<html>
<head>
</head>
<body>
   <?php 
     $data = array($_POST["name"],$_POST["email"],$_POST["user"],$_POST["password"],$_POST["gender"],)
     
    $myfile = fopen("userinfo.txt","w") or die ("unable to open file!");

     echo "SUSHIL IS HERE";

    for($i=0;$i<4;$i++)
      {
      fwrite($myfile,$data[$i]);
      }
    ?>
</body>
</html>

