<?php 
  session_start();
  if ( ! isset($_SESSION['access_token']) ) {
    header('Location: login.php');
    exit();
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Facebook Login</title>
</head>
<body>

<h1>Facebook Logged In Done</h1>
  <table>
    <thead>
      <tr>
        <td>Facebook User ID</td>
        <td>First Name</td>
        <td>Email</td>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $_SESSION['userData']['id'];?></td>
        <td><?php echo $_SESSION['userData']['first_name'];?></td>
        <td><?php echo $_SESSION['userData']['email'];?></td>
      </tr>
    </tbody>
  </table>
<a href="logout.php">Logout</a>
</body>
</html>