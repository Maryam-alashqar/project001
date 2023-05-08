<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{ asset('adminassets/plugins/fontawesome-free/css/all.min.css') }}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('adminassets/dist/css/adminlte.min.css') }}>


</head>
@yield('style')
<style>
    .logo {
        transform: rotate(-18deg);
        margin-right: 12px;
        box-sizing: border-box;
    }
    .dropdown-divider2 {
  height: 0;

  margin: 1rem 0;
  overflow: hidden;
  opacity: 20%;
  border-top: 1px solid #e7e6f1;
}
</style>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->

            <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i></a>
                </li>
              </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small"
                            placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-light" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">

                <!-- user Dropdown Menu -->

                <li class="nav-item dropdown">

                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-danger navbar-badge">15</span></a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    @php
                    $name = Auth::user()->username??'';
                    $src = 'https://ui-avatars.com/api/?background=random&name='.$name;

                    if(Auth::user()->image) {
                    $img = Auth::user()->image;
                    $src = asset('uploads/'.$img);
                    }
                    @endphp
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <img width="25" height="25" style="object-fit: contain; margin-top: -5px;" src="{{ $src }}"
                            class="img-circle elevation-2 ml-1" alt="User Image">
                        <i class="fas fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu  dropdown-menu-right">
                        <a href="" class="dropdown-item">
                            signed as <br> {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}
                        </a>

                        <div class="dropdown-divider"></div>
                        <a href="{{ route('admin.profile.index') }}" class="dropdown-item">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>



                        <div class="dropdown-divider"></div>
                        <a href="{{ route('logout') }}" onclick="
                        event.preventDefault();
                        document.getElementById('logout-form').submit()
                        " class="dropdown-item">
                            <i class="fas fa-sign-out-alt mr-2"></i> Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                            {{-- <button class="dropdown-item">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout</button> --}}
                        </form>

                    </div>
                </li>

            </ul>

        </nav>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('site.index') }}" class="brand-link">
                    <img src="{{ asset('adminassets/dist/img/AdminLTELogo.png') }}"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight-light">{{ env('APP_NAME') }}</span>
            </a>



            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <!-- Sidebar Menu -->
                <nav class="mt-3">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.index') }}" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon fas fa-grip-vertical"></i>
                                <p>
                                    Categories
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.categories.index') }}" class="nav-link">
                                        <i class="far fa-eye"> </i>
                                        <p> All categories</p>
                                    </a>
                                </li>
                                @if( Auth::user()->type == 'author' )
                                <li class="nav-item">
                                    <a href="{{ route('admin.categories.create') }}" class="nav-link ">
                                        <i class="fas fa-plus"> </i>
                                        <p> Add new category</p>
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ route('admin.categories.trash') }}" class="nav-link">
                                        <i class="fas fa-recycle"> </i>
                                        <p> Recycle bin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link ">
                                <i class="nav-icon far fa-newspaper"></i>
                                <p>
                                    Articles
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.articales.index') }}" class="nav-link">
                                        <i class="far fa-eye"> </i>
                                        <p> All articales</p>
                                    </a>
                                </li>
                                @if( Auth::user()->type == 'author' )
                                <li class="nav-item">
                                    <a href="{{ route('admin.articales.create') }}" class="nav-link ">
                                        <i class="fas fa-plus"> </i>
                                        <p> Add new article</p>
                                    </a>
                                </li>
                                @endif
                                <li class="nav-item">
                                    <a href="{{ route('admin.articales.trash') }}" class="nav-link">
                                        <i class="fas fa-recycle"> </i>
                                        <p> Recycle bin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item mb-1">
                            <a href="{{ route('admin.authors.index') }}" class="nav-link ">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p> Authors </p>
                            </a>
                        </li>
                        <div class="dropdown-divider2"></div>

                        <li class="nav-item mb-1">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-cog"></i>
                                <p>
                                    Setting & Support
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('admin.settings') }}" class="nav-link ">
                                        <i class="far fa-user-circle"></i>
                                        <p> Settings</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fas fa-lock"></i>
                                        <p> Permissions</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link ">
                                        <i class="fas fa-exclamation-triangle"></i>
                                        <p> Report a problem</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fas fa-book"></i>
                                        <p> Terms & Policies</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" >
            <!-- Main content -->
            <div class="content">
                <div class="container-fluid" >
                    @yield('content')

                </div>
                </div>
        </div>
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right">
                <strong>Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script>
                    <a href=" ">News.website</a>.
                </strong> All rights reserved.
            </div>
            <!-- Default to the left -->
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src={{ asset('adminassets/plugins/jquery/jquery.min.js') }}></script>
    <!-- Bootstrap 4 -->
    <script src={{ asset('adminassets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <!-- AdminLTE App -->
    <script src={{ asset('adminassets/dist/js/adminlte.min.js') }}></script>
<!--     <script>
        if (screen.width < 1800)
        $('[data-widget="pushmenu"]').PushMenu("collapse");
    </script> -->
</body>

</html>
