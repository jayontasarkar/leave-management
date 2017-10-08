<ul class="sidebar-menu">
    <li class="<?php echo e(Request::segment(1) == 'dashboard' ? 'active' : ''); ?>">
        <a href="<?php echo e(url('dashboard')); ?>">
            <i class="fa fa-dashboard"></i> <span>প্রথম পাতা</span>
        </a>
    </li>
    <?php if( ! in_array(auth()->user()->role->slug, ['dg', 'secretary']) ): ?>
    <li class="<?php echo e(Request::segment(1) == 'apply' ? 'active' : ''); ?>">
        <a href="<?php echo e(url('apply')); ?>">
            <i class="fa fa-envelope-o"></i> <span>ছুটির জন্য আবেদন</span>
        </a>
    </li>
    <li class="<?php echo e(Request::is('profile/applications') ? 'active' : ''); ?>">
        <a href="<?php echo e(url('profile/applications')); ?>">
            <i class="fa fa-trash-o"></i> <span>ছুটির আবেদনপত্রসমূহ</span>
        </a>
    </li>
    <?php endif; ?>
    <?php if($user->type === 'admin'): ?>
    <li class="treeview<?php echo e(Request::segment(1) == 'user-management' ? ' active' : ''); ?>">
        <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <span>ইউজার ম্যানেজমেন্ট</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('user-management/create') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('user-management/create')); ?>">
                    <i class="fa fa-angle-double-right"></i>নতুন ব্যবহারকারী
                </a>
            </li>
            <li class="<?php echo e(Request::is('user-management') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('/user-management')); ?>">
                    <i class="fa fa-angle-double-right"></i>ব্যবহারকারীর তালিকা
                </a>
            </li>
        </ul>
    </li>
    <li class="treeview<?php echo e(Request::segment(1) == 'settings' ? ' active' : ''); ?>">
        <a href="#">
            <i class="fa fa-cogs"></i>
            <span>সফটওয়্যার সেটিংস</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('settings/leave') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('settings/leave')); ?>">
                    <i class="fa fa-angle-double-right"></i> ছুটি ব্যাবস্থাপনা
                </a>
            </li>
            <li class="<?php echo e(Request::segment(2) == 'roles' ? 'active' : ''); ?>">
                <a href="<?php echo e(url('settings/roles')); ?>">
                    <i class="fa fa-angle-double-right"></i> পদমর্যাদা ব্যবস্থাপনা
                </a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
    <?php if($user->role->hasAuthorization()): ?>
    <li class="treeview <?php echo e(Request::segment(2) == 'leaves' ? 'active' : ''); ?>">
        <a href="#">
            <i class="fa fa-edit"></i> <span>ছুটি ম্যানেজমেন্ট</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li class="<?php echo e(Request::is('admin/leaves') ? 'active' : ''); ?>">
                <a href="<?php echo e(url('admin/leaves')); ?>"><i class="fa fa-angle-double-right"></i>আবেদনপত্রের তালিকা</a>
            </li>
        </ul>
    </li>
    <?php endif; ?>
</ul>