<?php
session_start();

if(isset($_POST['uname']) && isset($_POST['pwd'])){
  if($_POST['uname'] == "bao" && $_POST['pwd'] == "bao123") {
    $_SESSION['islogin'] = 1;
    $_SESSION['username'] = $_POST['uname'];
    header("Location: profile.php");
  }else{
    echo "<script>alert('Username/Password is invalid.')</script>";
  }
}


?>
<html>
  <head>
    <title>Books Library</title>
    <style>
  body {
    font-family: 'Arial', sans-serif;
    background-color: #f2f2f2;
    margin: 0;
    padding: 0;
  }

  .header {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
  }

  .logo {
    display: block;
    margin: 0 auto; 
    color: #fff;
    text-decoration: none;
    font-size: 24px;
    font-weight: bold;
  }

  .header-right {
    float: right;
  }

  .header-right a {
    color: #fff;
    text-decoration: none;
    margin-left: 10px;
    transition: color 0.3s ease-in-out;
  }

  .header-right a.active {
    font-weight: bold;
  }

  form {
    margin-top: 50px;
    text-align: center;
  }

  input[type="text"],
  input[type="password"] {
    width: 300px;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    transition: border-color 0.3s ease-in-out;
  }

  input[type="text"]:focus,
  input[type="password"]:focus {
    border-color: dodgerblue;
  }

  input[type="submit"] {
    background-color: dodgerblue;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease-in-out;
  }

  input[type="submit"]:hover {
    background-color: #265077;
  }
</style>


  </head>
  <body id="bodyId">
    <div class="header">
      <a href="index.php" class="logo">Books Library</a>
      <div class="header-right">
        <a href="index.php">Home</a>
        <a href="profile.php">Profile</a>
        <a class="active" href="login.php">Login</a>
      </div>
    </div>
    <div><br><br>
      <center>
      <form method="POST">
        <input type="text" id="uname" name="uname" placeholder="Username" autocomplete="off"><br>
        <input type="password" id="pwd" name="pwd" placeholder="Password" autocomplete="off"><br>
        <input type="submit" value="Login" style="background-color: dodgerblue;">
      </form>
      </center>
    </div>
  </body>
</html>