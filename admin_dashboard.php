<?php
session_start();

// Check if the user is logged in as admin
if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
  header("Location: admin_login.php");
  exit();
}

// Handle the form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Get the form data
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  // Validate the data
  if (empty($name) || empty($price) || empty($description)) {
    echo "Please fill in all fields.";
  } else {
    // Generate a unique ID for the product
    $id = uniqid();

    // Store the product data in a file
    $file = fopen("products/$id.txt", "w");
    fwrite($file, "$id\n$name\n$price\n$description");
    fclose($file);

    echo "Product created.";
  }
}

// Handle the delete request
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];

  // Delete the product file
  unlink("products/$id.txt");

  echo "Product deleted.";
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
</head>
<body>
  <h1>Admin Dashboard</h1>
  <h2>Create Product</h2>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="price" required>
    <br>
    <label for="description">Description:</label>
    <textarea id="description" name="description" required></textarea>
    <br>
    <input type="submit" value="Create">
  </form>
  <h2>Products</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Price</th>
      <th>Description</th>
      <th>Action</th>
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
      echo "<td><a href=\"admin_dashboard.php?delete=$id\">Delete</a></td>";
      echo "</tr>";
    }
    ?>
  </table>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
