<div class="table-responsive">
    <table class="table table-striped table-bordered datatable">
        <thead>
            <tr>
            	<th>ছুটির প্রকৃতি</th>
                <th>আবেদনপত্র</th>
                <th>পেন্ডিং আবেদন</th>
                <th>অনুমোদিত আবেদন</th>
                <th>আবেদনকৃত ছুটি</th>
                <th>অনুমোদিত ছুটি</th>
                <th>বকেয়া ছুটি</th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = config('leave.type'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e(entobn($value)); ?> (<?php echo e(entobn($total = config("leave.leaves." . $key))); ?>)</td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->count() : 0)); ?></td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->count() : 0)); ?></td>
                    <td><?php echo e(entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 2)->count() : 0)); ?></td>
                    <td><?php echo e(entobn($applied  = count($leaves) ? $leaves->where('type_id', $key)->sum('no_of_days') : 0)); ?></td>
                    <td><?php echo e(entobn($approved = count($leaves) ? $leaves->where('type_id', $key)->where('status', 2)->sum('no_of_days') : 0)); ?></td>
                    <td><?php echo e(entobn($total - $approved)); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>