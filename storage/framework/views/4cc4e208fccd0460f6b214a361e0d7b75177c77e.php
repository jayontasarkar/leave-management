<div class="modal fade" id="modal-note-<?php echo e($leave->id); ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title"><?php echo e($leave->reason); ?></h5>
                </div>
                <div class="modal-body">
                    <p>
                        <span class="label label-success" style="padding: 4px 6px;">ছুটির প্রকৃতি: <?php echo e(config("leave.type." . $leave->type_id)); ?></span>
                        <br><br>
                        <span class="label label-primary" style="padding: 6px 6px;">চূড়ান্ত অবস্থা: <?php echo e($leave->status == 1 ? 'অননুমোদিত' : 'অনুমোদিত'); ?></span>
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
                    <hr>
                    <form action="<?php echo e(url('admin/applications/approval/' . $leave->id)); ?>" method="POST" class="form-horizontal" role="form">
                        <?php echo e(csrf_field()); ?>

                        <legend class="text-center" style="font-size: 1.1em;">
                            ছুটির আবেদনের প্রেক্ষিতে আপনার মন্তব্য/মতামত
                        </legend>
                        <div class="form-group" style="width: 100%; padding-left: 20px; margin-bottom: 15px;">
                            <select name="status" class="form-control" style="width: 100%;">
                                <option value="">স্ট্যাটাস সিলেক্ট করুন</option>
                                <option value="2">অনুমোদন করা হলো</option>
                                <option value="3">বাতিল করা হলো</option>
                            </select>
                        </div>
                        <div class="form-group" style="width: 100%; padding-left: 20px; margin-bottom: 15px;">
                            <textarea name="note" id="note" rows="3" style="width: 100%;" class="form-control" placeholder="আপনার মন্তব্য/মতামত"></textarea>
                        </div>
                        <div class="form-group" style="width: 100%; padding-left: 20px; margin-top: 10px;">
                            <button type="submit" class="btn btn-primary">সেভ করুন</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>