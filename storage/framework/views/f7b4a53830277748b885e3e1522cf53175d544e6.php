<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
            	<th>ছুটির বিবরণ</th>
                <th>শুরুর তারিখ</th>
                <th>শেষের তারিখ</th>
                <th>বছর</th>
                <th style="width: 15%;"></th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                	<td><?php echo e($leave->title); ?></td>
                    <td><?php echo e(entobn($leave->from_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(entobn($leave->to_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(entobn($leave->year)); ?></td>
                    <td>
                    	<a href="<?php echo e(url('settings/leave/'.$leave->id.'/edit')); ?>" class="btn btn-xs btn-info" title="Edit Leave">
							<i class="fa fa-edit"></i>
                        </a>
                        <a data-toggle="modal" href="#modal-<?php echo e($leave->id); ?>" class="btn btn-xs" style="background-color: red;" title="Delete Leave?">
							<i class="fa fa-trash-o"></i>
                        </a>
                        <?php echo $__env->make('layouts.common.delModal', [
                            'id' => $leave->id,
                            'url' => 'settings/leave/'
                        ], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>