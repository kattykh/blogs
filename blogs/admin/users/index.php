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
        <h2 style="text-align: center;">Manage Users</h2>

          <?php include(ROOT_PATH . "/app/includes/messages.php");?>

        <table>
          <thead>
            <th>N</th>
            <th>Username</th>
            <th>Email</th>
            <th colspan="3">Action</th>
          </thead>
          <tbody>

            <?php foreach($admin_users as $key => $user): ?>
              <tr class="rec">
              <td><?php echo $key +1; ?></td>
              <td><?php echo $user['username']; ?></td>
              <td><?php echo $user['email']; ?></td>
              <td><a href="edit.php?id=<?php echo $user['id']; ?>" class="edit">Edit</a></td>
              <td><a href="index.php?delete_id=<?php echo $user['id']; ?>" class="delete">Delete</a></td>
              </tr>
            <?php endforeach; ?>
            
          </tbody>
        </table>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  

</body>
</html>