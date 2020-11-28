<?php include('path.php');?>
<?php include(ROOT_PATH .'/app/controllers/users.php');
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">



  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">

  <title>Login</title>
</head>

<body>
<?php include(ROOT_PATH . "/app/includes/header.php");?>
    
  <!-- // header -->

  <div class="auth-content">
    <form action="login.php" method="post">
      <h3 class="form-title">Login</h3>

      <?php include(ROOT_PATH . "/app/controllers/formErrors.php");?>


      <!-- <div class="msg error">
        <li>Username required</li>
      </div> -->
      <div>
        <label>Username</label>
        <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
      </div>
      <div>
        <label>Password</label>
        <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
      </div>
      <div>
        <button type="submit" name="login-btn" class="btn">Login</button>
      </div>
      <p class="auth-nav">Or <a href="<?php echo BASE_URL . '/register.php' ?>">Sign Up</a></p>
    </form>
  </div>

 
</body>

</html>