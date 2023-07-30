<li class="nav-item">
    <a href="{{route('dashboard')}}" class="nav-link" >
        <i class="nav-icon fa fa-tv" style="color: #F99D36"></i>
        <p>Dashboard</p>
    </a>
</li>
@can('view-user')
<li class="nav-item">
    <a href="{{route('users.index')}}" class="nav-link {{ Request::is('users*') ? 'active' : '' }}" >
        <i class="nav-icon fa fa-users" style="color: #F99D36"></i>
        <p>User</p>
    </a>
</li>
@endcan

@can('view-department')
<li class="nav-item">
    <a href="{{route('departments.index')}}" class="nav-link {{ Request::is('departments*') ? 'active' : '' }}" >
        <i class="nav-icon fa fa-building" style="color: #F99D36"></i>
        <p>Department</p>
    </a>
</li>
@endcan

@can('view-role')
<li class="nav-item">
    <a href="{{route('roles.index')}}" class="nav-link {{ Request::is('roles*') ? 'active' : '' }}" >
        <i class="nav-icon fa fa-id-card" style="color: #F99D36"></i>
        <p>Role</p>
    </a>
</li>
@endcan


