<?php 
	$title = Request::is('settings/leave') ? 'বাৎসরিক ছুটি ব্যাবস্থাপনা' : 'বাৎসরিক নতুন ছুটি';
 ?>
<?php echo $__env->make('layouts.common.title', [
	'title' => $title, 
	'link' => 'User Management &nbsp;>&nbsp; User List'
], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
	<div class="col-xs-12">

		<?php echo $__env->make('settings._tabheader', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<div class="tab-content rendering-content">
			<div class="tab-pane <?php echo e(Request::is('settings/leave') ? 'active' : ''); ?>" id="tabLeaves">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-6">
							<a href="<?php echo e(url('settings/leave/create')); ?>" class="btn btn-primary btn-sm">
								<i class="fa fa-plus"></i>&nbsp;নতুন ছুটি যোগ করুন
							</a>
						</div>
						<div class="col-md-6 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
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
				<?php if($leaves->count()): ?>
					<?php echo $__env->make('settings.leave.views._table', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	            <?php else: ?>
					<h3 class="text-center">ছুটি ব্যাবস্থাপনার কোনো তথ্য খুঁজে পাওয়া যায় নি</h3>
	            <?php endif; ?>
			</div>   		
		</div>
	</div>	
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php if(count($leaves)): ?>
    <?php echo $__env->make('layouts.common.dt-search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php endif; ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "<?php echo e(\Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y')); ?>"
		});	
		$(".form").on('submit', function() {
	      $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      return true;
	    });	
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>