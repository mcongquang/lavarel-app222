<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{route("admin.index")}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <!-- Heading -->
     <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="categories">
                <i class="fas fa-fw fa-table"></i>
                <span>Quản lý danh mục</span></a>
         </li>   
         <li class="nav-item">
            <a class="nav-link" href="product">
                <i class="fas fa-fw fa-table"></i>
                <span>Quản lý sản phẩm</span>
            </a>
        </li>
        
         <li class="nav-item">
            <a class="nav-link" href="Orders">
                <i class="fas fa-fw fa-table"></i>
                <span>Orders</span></a>
         </li>          
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>