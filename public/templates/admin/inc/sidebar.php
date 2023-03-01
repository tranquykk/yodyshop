<!-- Main Sidebar Container -->

  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin/index.php" class="brand-link" style="background-color: #007bff">
      <img src="/templates/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; ">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="display: flex;align-items: center;justify-content: space-between;">
        <?php
          if(isset($_SESSION['arrUser'])) {
        ?>
        <div class="image">
          <img src="/templates/admin/dist/img/user2-160x160.jpg" style="position: relative;" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info" style="margin: 0px 0 -8px -85px;">
          <a href="#" class="d-block"><?php echo $_SESSION['arrUser']['fullname'];?></a>
        </div>
        <div class="logout" style="margin: 0 13px -10px 0;">
          <a href="/admin/auth/logout.php">
            <i class="ion ion-log-out" style="font-size: 24px;color:blanchedalmond;"></i>
          </a>
        </div>
        <?php
        }
        ?>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <?php
        $url = $_SERVER['REQUEST_URI'];
      ?>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/admin/index.php" class="nav-link <?php echo (str_contains($url, '/admin/index.php'))? 'active':""?>" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="/admin/categorys/index.php" class="nav-link <?php echo (str_contains($url, '/categorys'))? 'active':""?>">
              <i class="nav-icon fas fa-poll"></i>
              <p>
                Quản lý danh mục
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/products/index.php" class="nav-link <?php echo (str_contains($url, '/products'))? 'active':""?>">
              <i class="nav-icon ion ion-pie-graph" style="font-size:20px"></i>
              <p>
                Quản lý sản phẩm
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/pictures/index.php" class="nav-link <?php echo (str_contains($url, '/pictures'))? 'active':""?>">
              <i class="nav-icon fas fa-file-image"></i>
              <p>
                Quản lý hình ảnh
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/orders/index.php" class="nav-link <?php echo (str_contains($url, '/orders'))? 'active':""?>">
              <i class="nav-icon ion ion-bag" style="font-size:20px"></i>
              <p>
                Quản lý đơn hàng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/users/index.php" class="nav-link <?php echo (str_contains($url, '/users'))? 'active':""?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Quản lý người dùng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/news/index.php" class="nav-link <?php echo (str_contains($url, '/news'))? 'active':""?>">
              <i class="nav-icon fas fa-newspaper" style="font-size:20px"></i>
              <p>
                Quản lý bài đăng
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/ratings/index.php" class="nav-link <?php echo (str_contains($url, '/ratings'))? 'active':""?>">
              <i class="nav-icon fas ion-chatbubbles" style="font-size:24px"></i>
              <p>
                Bình luận, đánh giá
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/contacts/index.php" class="nav-link <?php echo (str_contains($url, '/contacts'))? 'active':""?>">
              <i class="nav-icon fas fa-sitemap"></i>
              <p>
                Quản lý liên hệ
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/intros/index.php" class="nav-link <?php echo (str_contains($url, '/intros/index.php'))? 'active':""?>">
              <i class="nav-icon fab fa-product-hunt" style="font-size:20px"></i>
              <p>
                Phần giới thiệu
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>