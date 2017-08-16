<?php echo $__env->make('layouts.common.title', ['title' => 'Test Title', 'link' => 'Test Link'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
	<select id="cc" class="easyui-combotree" style="width:300px;height:30px;"
	        data-options="required:true" multiple="true">
	</select>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="<?php echo e(asset('AdminLTE/easyui/js/easyui.min.js')); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({
			data: <?php echo json_encode($test); ?>,
			onlyLeafCheck: false
		});
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>