 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">CHỨC NĂNG CHÍNH</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>Tour</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! route('admin/tour/index') !!}"><i class="fa fa-circle-o"></i> Xem DS Tour</a></li>
          <li><a href="{!! route('admin/tour/add') !!}"><i class="fa fa-circle-o"></i> Thêm Tour</a></li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Danh Mục</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! route('admin/category/index')!!}"><i class="fa fa-circle-o"></i> Xem DS Danh Mục</a></li>
          <li>
            <a href="{!! route('admin/category/add') !!}"><i class="fa fa-circle-o"></i> Thêm Danh Mục</a>
          </li>

        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-address-book-o" aria-hidden="true"></i> <span> Đơn đặt tour</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{!! route('admin/reservation/index')!!}"><i class="fa fa-circle-o"></i> Xem DS đơn đặt tour</a></li>
        </ul>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>