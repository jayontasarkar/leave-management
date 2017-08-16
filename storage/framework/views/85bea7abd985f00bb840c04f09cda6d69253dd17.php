<?php echo $__env->make('layouts.common.title', ['title' => 'Test Title', 'link' => 'Test Link'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
	<select multiple="true" class="form-control">
		<?php 
			$traverse = function ($roles) use (&$traverse) {
				foreach ($roles as $role) {
					echo "<option>{$role->text}</option>";
			    	if(count($role->children))
			        {
			        	$traverse($role->children);
					}
				}
			};
			$traverse($roles);
	     ?>
	</select>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>