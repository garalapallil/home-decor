<?php
$username = $_POST["username"];
$password = $_POST["password"];

if ($username == "cs100" && $password =="cs100"){
  echo "Login is successful";
} else {
    echo "Login is unsuccessful";
}
?>
