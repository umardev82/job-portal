@php
    $company = \App\Models\Admin\Company::where('id', \Illuminate\Support\Facades\Auth::id())->first();
@endphp
    <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Company Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset($company->image) }}" class="img-circle elevation-2"
                     alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('company.profile.edit')}}" class="d-block">{{$company->name}}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                       aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->
                <li class="nav-item @if(request()->route()->getName() === 'company.dashboard') active @endif">
                    <a href="{{route('company.dashboard')}}" class="nav-link @if(request()->route()->getName() === 'company.dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->route()->getName() === 'company.post.*') menu-open @endif">
                    <a href="#" class="nav-link  @if(request()->route()->getName() === 'company.post.*') active @endif" >
                        <p>Post <i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if(request()->route()->getName() === 'company.post.index') active @endif ">
                            <a href="{{ route('company.post.index') }}" class="nav-link active">
                                <i class="far fa-image nav-icon"></i>
                                <p>Post</p>
                            </a>
                        </li>
                        <li class="nav-item @if(request()->route()->getName() === 'company.post.create') active @endif">
                            <a href="{{ route('company.post.create') }}" class="nav-link">
                                <i class="far fa-image nav-icon"></i>
                                <p>Create Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-warning"><p>logout</p>
                        </button>
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
