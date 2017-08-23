<?php echo $__env->make('layouts.common.title', [
	'title' => 'নতুন ছুটি যুক্ত করুন', 
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">
		<?php echo $__env->make('settings._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="tab-content rendering-content">
			<div class="tab-pane <?php echo e(Request::is('settings/leave/create') ? 'active' : ''); ?>" id="tabLeaves">
				<?php echo $__env->make('settings.leave.views._new', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			</div>   		
		</div>
	</div>	
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "<?php echo e(\Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y')); ?>"
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>