<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ Auth::user()->gravatar() }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>





    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li>
        <a href="{{ url('/home') }}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pencil"></i>
          <span>Blog</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        
      </li>
      @if (check_user_permissions(request(), "Categories@index"))
        <li><a href="{{ route('backend.categories.index') }}"><i class="fa fa-folder"></i> <span>Categories</span></a></li>
      @endif
      @if (check_user_permissions(request(), "Categories@index"))
        <li><a href="{{ route('backend.departments.index') }}"><i class="fa fa-folder"></i> <span>Departments</span></a></li>
      @endif
       @if (check_user_permissions(request(), "Designation@index"))
        <li><a href="{{ route('backend.designations') }}"><i class="fa fa-tree"></i> <span>Designation</span></a></li>
      @endif
       @if (check_user_permissions(request(), "JobPost@index"))
        <li><a href="{{ route('backend.jobposts.index') }}"><i class="fa fa-tasks"></i> <span>Job Post</span></a></li>
      @endif
      @if (check_user_permissions(request(), "Users@index"))
        <li><a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a></li>
      @endif
	  
	  
	  @role(['superadministrator','administrator'])
            <li class="nav-item">
                <a class="nav-link {{ Request::is('admin/users') ? ' active' : null }}" href="{{route('users.index')}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                Users
                </a>
            </li>
            
            @endrole
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
