<?php 
 include('path.php'); 
 include(ROOT_PATH .'/app/controllers/topics.php');

$posts = array();
$postsTitle = 'Recent Posts';


if(isset($_GET['t_id']))
{
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
}

else if(isset($_POST['search-term']))
{
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
}else{
$posts = getPublishedPosts();
}
 
 ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <!-- Custom Styles -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/carousal.css">
  <title>Inspires Blog</title>
</head>
<body>
  <!-- header -->
 <?php include(ROOT_PATH . "/app/includes/header.php");?>
 <?php include(ROOT_PATH . "/app/includes/messages.php");?>



  <!-- // header -->


  <!-- Page wrapper -->
  
  

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/img_nature_wide.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/img_snow_wide.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/img_mountains_wide.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    <!-- // Posts Slider -->
    <!-- content -->
    <div class="content clearfix">
      <div class="page-content">
        <h1 class="recent-posts-title"><?php echo $postsTitle; ?></h1>

       <?php foreach ($posts as $key => $post): ?>
        <div class="post clearfix">
          <img src="<?php echo BASE_URL . '/images/' . $post['image']; ?>" class="post-image" alt="">
          <div class="post-content">
            <h2 class="post-title"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a></h2>
            <div class="post-info">
              <i class="fa fa-user-o"><?php echo $post['username']; ?></i>
              &nbsp;
              <i class="fa fa-calendar"><?php echo date('F j. Y',strtotime($post['created_at'])); ?></i>
            </div>
            <p class="post-body"><?php echo html_entity_decode(substr($post['body'], 0, 150) . '...'); ?>
            </p>
            <a href="single.php?id=<?php echo $post['id']; ?>" class="read-more">Read More</a>
          </div>
        </div>
      
       <?php endforeach; ?>
        
        
      </div>
      <div class="sidebar">
        <!-- Search -->
        <div class="search-div">
          <h2><b>Search</b></h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="Search...">
          </form>
        </div>
        <!-- // Search -->
        <!-- topics -->
        <div class="section topics">
          <h2>Topics</h2>
          <ul>
           
           <?php foreach ($topics as $key => $topic): ?>
              
              <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
            
           <?php endforeach; ?>

            
          </ul>
        </div>
        <!-- // topics -->
      </div>
    </div>
    <!-- // content -->
  </div>
  <!-- // page wrapper -->
  <!-- FOOTER -->
  
  <script src="js/carousal.js"></script>
 <?php include("app/includes/footer.php");?>
  <!-- // FOOTER -->
  
  
</body>
</html>