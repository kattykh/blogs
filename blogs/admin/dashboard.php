<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
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
  <link rel="stylesheet" href="../css/style.css">

  <!-- Admin Styling -->
  <link rel="stylesheet" href="../css/admin.css">

  <title>Admin - Dashboard</title>
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
      
      <div class="">
        <h2 style="text-align: center;"><b>Dashboard</b></h2>
       
        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

        <h2><b><strong>Hello Admin!</strong></b></h2>
      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  

</body>
</html>