<ul class="sidebar-menu">
    <li class="{{ Request::segment(1) == 'dashboard' ? 'active' : '' }}">
        <a href="{{ url('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>প্রথম পাতা</span>
        </a>
    </li>
    <li class="{{ Request::segment(1) == 'apply' ? 'active' : '' }}">
        <a href="{{ url('apply') }}">
            <i class="fa fa-envelope-o"></i> <span>ছুটির আবেদন</span>
        </a>
    </li>
    <li class="treeview{{ Request::segment(1) == 'user-management' ? ' active' : '' }}">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>ইউজার ম্যানেজমেন্ট</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('user-management/create') ? ' active' : '' }}">
                <a href="{{url('/user-management/create')}}">
                    <i class="fa fa-angle-double-right"></i>নতুন ব্যবহারকারী
                </a>
            </li>
            <li class="{{ Request::is('user-management') ? ' active' : '' }}">
                <a href="{{url('/user-management')}}">
                    <i class="fa fa-angle-double-right"></i>ব্যবহারকারীর তালিকা
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview{{ Request::segment(1) == 'settings' ? ' active' : '' }}">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>সফটওয়্যার সেটিংস</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('settings/leave') ? 'active' : '' }}">
                <a href="{{ url('settings/leave') }}">
                    <i class="fa fa-angle-double-right"></i> ছুটি ব্যাবস্থাপনা
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview {{ Request::segment(2) == 'leaves' ? 'active' : '' }}">
        <a href="#">
            <i class="fa fa-edit"></i> <span>ছুটি ম্যানেজমেন্ট</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="{{ Request::is('admin/leaves') ? 'active' : '' }}">
                <a href="{{ url('admin/leaves') }}"><i class="fa fa-angle-double-right"></i>আবেদনপত্রের তালিকা</a>
            </li>
        </ul>
    </li>
</ul>