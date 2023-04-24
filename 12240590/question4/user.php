<! DOCTYPE html>
<html>
<head>
    <title>User Details</title>
</head>
<body>
    <table>
    <tr> 
        
        <th>Name</th>
        <th>Email</th>
        <th>Contact</th>
        <th>Country</th>
    </tr>
    <tr>
        <td><?php echo $_POST["name"]; ?></td>
        <td><?php echo $_POST["email"]; ?></td>
        <td><?php echo $_POST["contact"]; ?></td>
        <td><?php echo $_POST["country"]; ?></td>
      </tr>
      </table>
</body>
</html>  
