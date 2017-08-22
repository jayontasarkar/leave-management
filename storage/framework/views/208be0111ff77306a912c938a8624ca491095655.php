<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="<?php echo e(Request::is('settings/leave') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('settings/leave')); ?>">ছুটি ব্যাবস্থাপনা</a>
    </li>
    <li class="<?php echo e(Request::is('settings/roles') ? 'active' : ''); ?>">
    	<a id="tabEmployee" href="<?php echo e(url('settings/roles')); ?>">পদমর্যাদা ব্যবস্থাপনা</a>
    </li>
</ul>
