<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index.index')}}" class="brand-link" style="background-color: #007bff">
      <img src="/templates/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; ">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex" style="display: flex;align-items: center;justify-content: space-between;">
        @if (Auth::check())
          <div class="image">
            <img src="/templates/admin/dist/img/user2-160x160.jpg" style="position: relative;" class="img-circle elevation-2" alt="User Image">
            <div class="info" style="margin: 0px 0 -16px -5px;">
              <a href="#" class="d-block">{{Auth::user()->fullname}}</a>
            </div>
          </div>
          <div class="logout" style="margin: 0 13px -10px 0;">
            <a href="{{route('auth.logout')}}">
              <i class="ion ion-log-out" style="font-size: 24px;color:blanchedalmond;"></i>
            </a>
          </div>
        @endif
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
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{route('admin.index.index')}}" class="nav-link {{(request()->routeIs('admin.index.index')) ? "active" : "" }}" >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Trang chủ
              </p>
            </a>
          </li>
          @if (Auth::check())
            <li class="nav-item">
              <a href="{{route('admin.cat.index')}}" class="nav-link {{ (request()->routeIs('admin.cat.index')) || (request()->routeIs('admin.cat.add')) || (request()->routeIs('admin.cat.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-poll"></i>
                <p>
                  Quản lý danh mục
                </p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{route('admin.classify.index')}}" class="nav-link {{ (request()->routeIs('admin.classify.index')) || (request()->routeIs('admin.classify.add')) || (request()->routeIs('admin.classify.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-layer-group"></i>
                <p>
                  Phân loại mặt hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.group.index')}}" class="nav-link {{ (request()->routeIs('admin.group.index')) || (request()->routeIs('admin.group.add')) || (request()->routeIs('admin.group.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-list"></i>
                <p>
                  Quản lý nhóm mặt hàng
                </p>
              </a>
            </li> --}}
            <li class="nav-item">
              <a href="{{route('admin.product.index')}}" class="nav-link {{ (request()->routeIs('admin.product.index')) || (request()->routeIs('admin.product.add')) || (request()->routeIs('admin.product.edit')) ? "active" : "" }}">
                <i class="nav-icon ion ion-pie-graph" style="font-size:20px"></i>
                <p>
                  Quản lý sản phẩm
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.order.index')}}" class="nav-link {{ (request()->routeIs('admin.order.index')) || (request()->routeIs('admin.order.show')) ? "active" : "" }}">
                <i class="nav-icon ion ion-bag" style="font-size:20px"></i>
                <p>
                  Quản lý đơn hàng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.user.index')}}" class="nav-link {{ (request()->routeIs('admin.user.index')) || (request()->routeIs('admin.user.add')) || (request()->routeIs('admin.user.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Quản lý người dùng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link {{ (request()->routeIs('admin.news.index')) || (request()->routeIs('admin.news.add')) || (request()->routeIs('admin.news.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-newspaper" style="font-size:20px"></i>
                <p>
                  Quản lý bài đăng
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.contact.index')}}" class="nav-link {{ (request()->routeIs('admin.contact.index')) || (request()->routeIs('admin.contact.add')) || (request()->routeIs('admin.contact.edit')) ? "active" : "" }}">
                <i class="nav-icon fas fa-sitemap"></i>
                <p>
                  Quản lý liên hệ
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('admin.intro.index')}}" class="nav-link {{ (request()->routeIs('admin.intro.index')) || (request()->routeIs('admin.intro.edit')) ? "active" : "" }}">
                <i class="nav-icon fab fa-product-hunt" style="font-size:20px"></i>
                <p>
                  Phần giới thiệu
                </p>
              </a>
            </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>