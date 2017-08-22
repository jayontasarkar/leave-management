<?php echo $__env->make('layouts.common.title', [
	'title' => "বাৎসরিক সকল ছুটির হিসাব", 
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
		    <li class="<?php echo e(Request::segment(3) == 'leaves' ? 'active' : ''); ?>">
		    	<a id="tabEmployee" href="<?php echo e(url('employee/' . $user->id . '/leaves')); ?>">ছুটির আবেদনপত্রসমূহ</a>
		    </li>
		    <li class="<?php echo e(Request::segment(3) == 'reports' ? 'active' : ''); ?>">
		    	<a id="tabPageEmployee" href="<?php echo e(url('employee/' . $user->id . '/reports')); ?>">ছুটির রিপোর্ট</a>
		    </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabPageEmployee">
				<?php echo $__env->make('admin.employee.views._profile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4">
							<a href="<?php echo e(url('employee/' . $user->id . '/leaves')); ?>" class="btn btn-primary">ছুটির আবেদনপত্রসমূহ</a>
						</div>
						<div class="col-md-8 text-right">
							<form class="form form-inline" method="GET">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="year" id="" class="form-control">
										<option value="">বছর সিলেক্ট করুন</option>
										<?php for($i = 2017; $i < 2050; $i++): ?>
										<option value="<?php echo e($i); ?>" <?php echo e((Request::input('year') ? : date('Y')) == $i ? 'selected' : ''); ?>>
											<?php echo e(entobn($i)); ?>

										</option>
										<?php endfor; ?>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> সার্চ করুন
								</button>
							</form>
						</div>
					</div>
				</div>
				<?php echo $__env->make('profile.leaves.views._leaves', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>   		
		</div>
	</div>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>