<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  

  <!-- Custom Styles -->
  <link rel="stylesheet" href="../../css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../../css/admin.css">

  <title>Admin - Create User</title>
</head>

<body>

  <!--admin header -->
 <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
  

  <div class="admin-wrapper clearfix">
    <!-- Left Sidebar -->
     <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- // Left Sidebar -->

    <!-- Admin Content -->
    <div class="admin-content clearfix">
      <div class="button-group">
        <a href="create.php" class="btn btn-sm">Add User</a>
        <a href="index.php" class="btn btn-sm">Manage Users</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Add User</h2>

    <?php include(ROOT_PATH . "/app/controllers/formErrors.php"); ?> 

        <form action="create.php" method="post">
          <!-- <div class="msg error">
            <li>Username required</li>
          </div> -->
          <div class="input-group">
            <label>Username</label>
            <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
          </div>
          <div class="input-group">

         <?php if(isset($admin) && $admin == 1): ?>
              <label>
              <input type="checkbox" name="admin" checked>
               Admin
              </label>
         <?php else: ?>
              <label>
              <input type="checkbox" name="admin">
               Admin
              </label>
         <?php endif; ?>
           
            </div>
          <div class="input-group">
            <button type="submit" name="create-admin" class="btn">Add User</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  

</body>
</html>