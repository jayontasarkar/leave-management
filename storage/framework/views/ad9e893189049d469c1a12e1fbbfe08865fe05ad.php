<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
            	<th>ছুটির বিবরণ</th>
                <th>শুরুর তারিখ</th>
                <th>শেষের তারিখ</th>
                <th>দিনের পরিমাণ</th>
                <th>ছুটির প্রকৃতি</th>
                <th>ছুটির স্ট্যাটাস</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            	<?php $__currentLoopData = $leaves; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $leave): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                	<td><?php echo e($leave->reason); ?></td>
                    <td><?php echo e(entobn($leave->start_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(entobn($leave->end_date->format('M d, Y'))); ?></td>
                    <td><?php echo e(entobn($leave->no_of_days)); ?> দিন</td>
                    <td><?php echo e(config("leave.type." . $leave->type_id)); ?></td>
                    <td>
                        <span class="label label-<?php echo e($leave->status == 2 ? 'success' : 'warning'); ?>">
                            <?php echo e($leave->status == 2 ? 'অনুমোদিত' : 'পেন্ডিং'); ?>

                        </span>
                    </td>
                    <td>
                        <a data-toggle="modal" href="#modal-<?php echo e($leave->id); ?>" class="btn btn-xs btn-primary" title="Leave Application Details">
                            <i class="fa  fa-eye"></i>
                        </a>
                        <div class="modal fade" id="modal-<?php echo e($leave->id); ?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h5 class="modal-title">ছুটির বিস্তারিত বিবরণ</h5>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            <span class="label label-success" style="padding: 4px 6px;">ছুটির প্রকৃতি: <?php echo e(config("leave.type." . $leave->type_id)); ?></span>
                                            <br><br>
                                            <span class="label label-primary" style="padding: 6px 6px;">চূড়ান্ত অবস্থা: <?php echo e($leave->status == 1 ? 'অননুমোদিত' : 'অনুমোদিত'); ?></span>
                                            <br><br>
                                            <strong>ছুটির আবেদনের কারণ:</strong><br>
                                            <?php echo e($leave->reason); ?>

                                        </p>
                                        <br><br>
                                        <table class="table table-condensed table-bordered table-striped" style="font-size:14px;">
                                            <thead>
                                                <tr>
                                                    <th>শুরুর তারিখ</th>
                                                    <th>শেষের তারিখ</th>
                                                    <th>ছুটির সময়কাল</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo e(entobn($leave->start_date->format('M d, Y'))); ?></td>
                                                    <td><?php echo e(entobn($leave->end_date->format('M d, Y'))); ?></td>
                                                    <td><?php echo e(entobn($leave->no_of_days)); ?> দিন</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-condensed table-bordered table-striped" style="font-size:14px;">
                                            <thead>
                                                <tr>
                                                    <th>কর্তৃপক্ষের মতামত/মন্তব্য:</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <span class="logTime label label-default" title="Sunday, July 16, 2017 at 2:25pm">16 Jul at 2:25pm</span>&nbsp;&nbsp;<b>Pending -&gt; Approved</b><br> (by: Administrator)
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span class="logTime label label-default" title="Monday, July 24, 2017 at 5:02pm">24 Jul at 5:02pm</span>&nbsp;&nbsp;<b>Approved -&gt; Cancellation Requested</b><br>Leave cancellation request sent (by: Administrator)
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>