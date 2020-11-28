<?php include("../../path.php"); ?>
<?php include(ROOT_PATH .'/app/controllers/topics.php');
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

  <title>Admin - Edit Topic</title>
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
        <a href="create.php" class="btn btn-sm">Add Topic</a>
        <a href="index.php" class="btn btn-sm">Manage Topics</a>
      </div>
      <div class="">
        <h2 style="text-align: center;">Edit Topic</h2>
       <?php include(ROOT_PATH . "/app/controllers/formErrors.php");?>
        <form action="edit.php" method="post">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
          </div>
          <div class="input-group">
            <label>Description</label>
            <textarea class="text-input" name="description" id="body"><?php echo $description; ?></textarea>
          </div>
          <div class="input-group">
            <button type="submit" name="update-topic" class="btn" >Update topic</button>
          </div>
        </form>

      </div>
    </div>
    <!-- // Admin Content -->

  </div>


  

</body>
</html>