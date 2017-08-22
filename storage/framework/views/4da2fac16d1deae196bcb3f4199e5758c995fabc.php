<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="<?php echo e(Request::is('profile') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile')); ?>">সকল বৃত্তান্ত</a>
    </li>
    <li class="<?php echo e(Request::is('profile/leave') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile/leave')); ?>">ছুটির তালিকা</a>
    </li>
    <li class="<?php echo e(Request::is('profile/applications') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('profile/applications')); ?>">ছুটির আবেদনপত্র</a>
    </li>
    <li class="<?php echo e(Request::is('profile/edit') ? 'active' : ''); ?>">
    	<a id="tabProfileEdit" href="<?php echo e(url('profile/edit')); ?>">তথ্য পরিবর্তন</a>
    </li>
    <li class="<?php echo e(Request::is('profile/password') ? 'active' : ''); ?>">
    	<a id="tabProfileEdit" href="<?php echo e(url('profile/password')); ?>">পাসওয়ার্ড পরিবর্তন</a>
    </li>
</ul> 
