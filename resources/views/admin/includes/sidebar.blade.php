<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">

    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('asset/brand/coreui.svg#full') }}"></use>
        </svg>

        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{ asset('asset/brand/coreui.svg#signet') }}"></use>
        </svg>
    </div>

    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">


        <li class="nav-item"><a class="nav-link" href="{{ url('admin') }}">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-grid') }}"></use>
                </svg> Dashboard</a></li>


        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user') }}"></use>
                </svg> Users</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/all_teachers') }}"><span class="nav-icon"></span>
                        Teachers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/all_students') }}"><span class="nav-icon"></span>
                        Student</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/admins') }}"><span class="nav-icon"></span> Admin</a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-user-plus') }}"></use>
                </svg> Add User</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/add_users') }}"><span class="nav-icon"></span> User
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/add_students') }}"><span class="nav-icon"></span> Student
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-group') }}"></use>
                </svg> Groups</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/completed') }}"><span class="nav-icon"></span> Completed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/running') }}"><span class="nav-icon"></span> Running</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/unassigned') }}"><span class="nav-icon"></span> Unassigned</a>
                </li>
            </ul>
        </li>

        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{ asset('vendors/@coreui/icons/svg/free.svg#cil-group') }}"></use>
                </svg> My Groups</a>
            <ul class="nav-group-items">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/completed_group') }}"><span class="nav-icon"></span> Completed</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/running_group') }}"><span class="nav-icon"></span> Running</a>
                </li>
            </ul>
        </li>


        {{-- <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button> --}}
</div>
