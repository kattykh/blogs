 <header class="clearfix">
    <a class="logo" href="<?php echo BASE_URL . '/index.php'; ?>">
      <h1 class="logo-text"><span>Inspires</span>Blog</h1>
      <!-- <img src="images/logo-placeholder.png" alt="Logo"> -->
    </a>
    <div class="fa fa-reorder menu-toggle"></div>
    <nav>
      <ul class="nav">

      <?php if(isset($_SESSION['username'])): ?>
       
        <li>
          <a href="#" class="userinfo">
            <i class="fa fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: .8cm;"></i>
          </a>
          <ul class="dropdown">
            
            <li><a href="<?php echo BASE_URL . '/logout.php';?>" class="logout">Logout</a></li>
          </ul>
        </li>
      <?php endif; ?>

        
      </ul>
    </nav>
  </header>