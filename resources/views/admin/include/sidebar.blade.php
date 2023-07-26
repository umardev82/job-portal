@php
$user = \App\Models\User::where('id', \Illuminate\Support\Facades\Auth::id())->first();
@endphp


<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Admin Panel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset($user->image) }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{route('admin.profile.edit')}}" class="d-block">{{$user->name}}</a>
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
                <li class="nav-item @if(request()->route()->getName() === 'admin.dashboard') active @endif">
                    <a href="{{route('admin.dashboard')}}"
                       class="nav-link @if(request()->route()->getName() === 'admin.dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if(request()->routeIs('admin.company.*')) menu-open @endif">
                    <a href="#"
                       class="nav-link @if(request()->route()->getName() === 'admin.company.index') active @endif">
                        <p>Company<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if(request()->routeIs('admin.company.index')) active @endif">
                            <a href="{{route('admin.company.index')}}"
                               class="nav-link @if(request()->routeIs('admin.company.index')) active @endif">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Company</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.company.create')}}"
                               class="nav-link @if(request()->routeIs('admin.company.create') || request()->routeIs('admin.company.edit')) active @endif">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Create Company</p>
                            </a>
                        </li>

                    </ul>

                </li>
                <li class="nav-item @if(request()->route()->getName() === 'admin.role.*') menu-open @endif">
                    <a href="#" class="nav-link @if(request()->route()->getName() === 'admin.role.*') active @endif">
                        <p>
                            Role
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.role.index') }}"
                               class="nav-link @if(request()->route()->getName() === 'admin.role.index') active @endif">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Role</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.role.create') }}"
                               class="nav-link @if(request()->route()->getName() === 'admin.role.create') active @endif">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <p>Create Role</p>
                            </a>
                        </li>

                    </ul>

                </li>

                <li class="nav-item @if(request()->route()->getName() === 'admin.post.*') menu-open @endif">
                    <a href="#" class="nav-link @if(request()->route()->getName() === 'admin.role.*') active @endif">
                        <p>Post<i class="right fas fa-angle-left"></i></p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item @if(request()->route()->getName() === 'admin.role.index') active @endif">
                            <a href="{{ route('admin.post.index') }}" class="nav-link active">
                                <i class="far fa-image nav-icon"></i>
                                <p>Post</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.post.create') }}"
                               class="nav-link @if(request()->route()->getName() === 'admin.role.create') active @endif">
                                <i class="far fa-image nav-icon"></i>
                                <p>Create Post</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if(request()->route()->getName() === 'admin.dashboard') active @endif">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="nav-link btn btn-warning">
                            <p>
                                logout
                            </p>
                        </button>
                    </form>

                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
