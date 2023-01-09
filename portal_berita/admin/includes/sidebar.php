<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
    <img src="includes/logo_m.png" alt="AdminLTE Logo" class="brand-image ">
      <span class="brand-text font-weight-light">NEWZM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="index.php?include=profil" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profil
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=kategori" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Kategori
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=post" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Post
              </p>
            </a>
          </li>
          
          <?php 
            if (isset($_SESSION['level'])){
              if ($_SESSION['level']=="Admin"){?>
          <li class="nav-item">
            <a href="index.php?include=comment" class="nav-link">
              <i class="nav-icon fas fa-comments"></i>
              <p>
                Comment
              </p>
            </a>
          </li>
          <?php }}?>

          <?php 
            if (isset($_SESSION['level'])){
              if ($_SESSION['level']=="Admin"){?>
          <li class="nav-item">
            <a href="index.php?include=message" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Message
              </p>
            </a>
          </li>
          <?php }}?>

          <?php 
            if (isset($_SESSION['level'])){
              if ($_SESSION['level']=="Admin"){?>
          <li class="nav-item has-treeview">
            <a href="index.php?include=comment" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Pages
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?include=about-us" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>About Us</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?include=contact" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }}?>

          <?php 
          if (isset($_SESSION['level'])){
            if ($_SESSION['level']=="Admin"){?>
            <li class="nav-item">
                <a href="index.php?include=pengaturan-user" class="nav-link">
                <i class="nav-icon fas fa-user-cog"></i>
                <p>
                  Pengaturan User
                </p>
                </a>
            </li>
          <?php }}?>

<!--           <li class="nav-item">
            <a href="index.php?include=ubah-password" class="nav-link">
              <i class="nav-icon fas fa-user-lock"></i>
              <p>
                Ubah Password
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?include=signout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Sign Out
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>