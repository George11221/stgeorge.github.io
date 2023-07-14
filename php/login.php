<?php

$dsn = 'mysql:host=localhost;dbname=church;charset=utf8mb4';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $pdo->prepare("SELECT password FROM regestration_table WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($row) {
        $storedPassword = $row['password'];

        if ($password === $storedPassword) {
        
            echo "Login successful";
        } else {
        
            echo "Incorrect password";
        }
    } else {
        
        echo "Invalid email";
    }

  
    $pdo = null;
} catch (PDOException $e) {
    
    echo "Connection failed: " . $e->getMessage();
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Login</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link rel="stylesheet" href="css.css">
    <script src='script.js'></script>
</head>
<style>
    .login_img {
        background-image: url(photos/church-windows-2217785.jpg);
        background-size: cover;
    }
</style>

<body class="login_img">

<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
  margin: 0;
  padding: 0;
}

.container {
  width: 400px;
  margin: 100px auto;
  background-color: #fff;
  opacity: 90%;
  border-radius: 35px;
  padding: 35px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h2 {
  text-align: center;
  margin-bottom: 30px;
}

.input-group {
  margin-bottom: 20px;
}

.input-group label {
  display: block;
  color: #555;
}

.input-group input {
  width: 95%;
  padding: 3px;
  border-radius: 15px;
  border: 3px solid #ccc;
  transition: border-color 0.3s ease;
}

.input-group input[type="text"],
.input-group input[type="password"] {
  height: 35px;
}

.input-group input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
  height:40px;
  transition: background-color 0.3s ease;
}

.input-group input[type="submit"]:hover {
  background-color: #45a049;
 
}

.input-error {
  border-color: red;
}
</style>
</head>
<body>

<div class="container">
<h2>Login</h2>
<form method="POST" action="login.php">
<div class="input-group">
<label for="email">Email:</label>
<input type="email" name="email" id="email" placeholder="Enter your email" required>
</div>
<div class="input-group">
<label for="password">Password:</label>
<input type="password" name="password" id="password" placeholder="Enter your password" required>
</div>
<div class="input-group">
<input type="submit" value="Login">
</div>
<p>First Time? <a href="regestration.php">Regestration</a></p>
</form>

</div>
</body>

</html>



