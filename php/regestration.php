

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Sign Up</title>
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
<script src="script.js"></script>
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
<h2>Sign Up</h2>
<form action="add.php" method="POST">
  <div class="input-group">
    <label for="username">User Name:</label>
    <input type="text" name="username" id="username" placeholder="Enter your user name" required>
  </div>

  <div class="input-group">
    <label for="Email">Email:</label>
    <input type="Email" name="email" id="Email" placeholder="Enter your Email " required>
  </div>
  <div class="input-group">
    <label for="password">password:</label>
    <input type="password" name="password" id="password" placeholder="Enter your password " required>
  </div>
  <div class="input-group">
    <label for="confirm-password">confirm-password:</label>
    <input type="password" name="cpassword" id="confirm-password" placeholder="Repeat the password " required>
  </div>
  <div class="input-group">
  <label for="group">Select a rule:</label>
  <select id="rule" name="rule">
    <optgroup label="rules">
      <option value="choose"> choose </option>
      <option value="اب كاهن"> اب كاهن </option>
      <option value="خادم">خادم</option>
      <option value="مخدوم">مخدوم</option>
      <option value="إدارة">إدارة</option>
      <option value="IT">IT</option>
    </optgroup>
  </div>
  <span id="passwordError" class="error"></span>
  <div class="input-group">
    <input type="submit" value="Login">
  </div>
  <p>Have an Account? <a href="login.php">Login</a></p>
</form>
</div>




    </body>

</html>