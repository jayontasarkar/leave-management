<div class="modal fade" id="modal-<?php echo e($id); ?>" tabindex="-1"
	role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
>
    <div class="modal-dialog">
	    <div class="modal-content">
	    	<div class="text-danger">
		        <div class="modal-header panel-heading">
		          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		          <h4 class="modal-title">আপনি কি এই তথ্য ডিলিট করতে চান ?</h4>
		        </div>
		        <div class="modal-footer">
		          <form action="<?php echo e(url($url . $id)); ?>" method="POST">
		      		<?php echo e(csrf_field()); ?>

		      		<?php echo e(method_field('DELETE')); ?>

		            <button type="button" class="btn btn-default" data-dismiss="modal">ক্লোজ করুন</button>
		            <button type="submit" class="btn btn-danger">ডিলিট করুন</button>
		          </form>
		        </div>
	        </div><!-- /.modal-content -->
	    </div>
    </div><!-- /.modal-dialog -->
</div><!