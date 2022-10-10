<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div class="flex-column">
    <a href="/admin/index" class="brand-link">
      <!--<img src="" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      <i class="fas fa-microchip"></i>
      <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>
    </div>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--<img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">-->
          <i class="nav-icon fa-solid fa-user-secret"></i>         
        </div>
        <div class="info">
          Administrator
        </div>
      </div>

      <!-- SidebarSearch Form 
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="nav-icon fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/index" class="nav-link {{ Request::is('admin/index') ? 'active':'' }}">              
              <i class="nav-icon fa-solid fa-house"></i> 
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-header">EXAMPLES</li>                  
          <li class="nav-item">
            <a href="/admin/categories" class="nav-link {{ Request::is('admin/categories') ? 'active' : '' }}">
              <i class="nav-icon fa-solid fa-layer-group"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item "> <!-- "> -->
            <a class="nav-link {{ Request::is('admin/brands') ? 'active' : '' }}" href="{{ url('/admin/brands') }}" >
              <i class="nav-icon fa-solid fa-tags"></i>             
              <p>
                Brands
              </p>
            </a>
          </li>
          <li class="nav-item {{ Request::is('admin/products') || Request::is('admin/products/add') || Request::is('admin/products/*/edit') ? 'menu-open' : '' }}"> 
            <a class="nav-link {{ Request::is('admin/products') || Request::is('admin/products/add') || Request::is('admin/products/*/edit') ? 'active' : '' }}" href="#" >
              <i class="nav-icon fa-solid fa-barcode"></i>             
              <p>
                Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/admin/products') }}" class="nav-link {{ Request::is('admin/products') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/products/add" class="nav-link {{ Request::is('admin/products/add') || Request::is('admin/products/*/edit') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>{{ Request::is('admin/products/*/edit') ? 'Edit Product' : 'Add Product' }}</p>
                </a>
              </li>
              
            </ul>
          </li>  
          <!--       
          <li class="nav-item">
            <a href="/admin/categories" class="nav-link">
              <i class="nav-icon fa-solid fa-layer-group"></i>
              <i class="fa-solid fa-tags"></i>
              <i class="fa-solid fa-user-plus"></i>
              <i class="fa-solid fa-users"></i>
              <i class="fa-solid fa-user-secret"></i>
              <i class="fa-solid fa-circle-user"></i>
              <i class="fa-solid fa-user-xmark"></i>
              <i class="fa-solid fa-user-pen"></i>
              <i class="fa-solid fa-tag"></i>
              <i class="fa-solid fa-barcode"></i>
           
              <p>
                Categories
              </p>
            </a>
          </li>
           -->  
        </ul>      
           
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>