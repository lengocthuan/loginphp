<?php
session_start();

$userinfo = array(
                'user1'=>'password1',
                'user2'=>'password2'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    }else {
        //Invalid Login
    }
}
?>

<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <link href="php.png" type="image/x-icon" rel="icon">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
  <div>
      <?php if($_SESSION['username']): ?>
            <p>You are logged in as <?=$_SESSION['username']?></p>
            <p><a href="?logout=1">Logout</a></p>
      <?php endif; ?>
  </div>


  <div class="login-page">
  <div class="form">
    <form class="register-form" action="" method="POST">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="#">Sign In</a></p>
    </form>
    <form class="login-form" action="" method="POST">
      <input type="text" placeholder="username" name="username"/>
      <input type="password" placeholder="password" name="password"/>
      <button>login</button>
      <p class="message">Not registered? <a href="#">Create an account</a></p>
    </form>
  </div>
  </div>

  <footer>
    <div class="footer">
        <span class="copyright">Copyright &copy; 2019 | LNT | All Rights Reserved</span>
        <span class="policy">Terms of Service | Privact Policy</span>
    </div>
  </footer>  

</body>
</html>



