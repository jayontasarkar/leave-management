<div class="modal fade" id="modal-note-{{ $leave->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h5 class="modal-title">{{ $leave->user->name }}</h5>
                </div>
                <div class="modal-body">
                    <p>
                        <span class="label label-info" style="padding: 4px 6px;">{{ $leave->reason }}</span>
                        <br><br>
                        <span class="label label-success" style="padding: 4px 6px;">ছুটির প্রকৃতি: {{ config("leave.type." . $leave->type_id) }}</span>
                        <br><br>
                        <span class="label label-primary" style="padding: 6px 6px;">চূড়ান্ত অবস্থা: {{ ! $leave->status ? 'অননুমোদিত' : 'অনুমোদিত' }}</span>
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
                                <td>{{ entobn($leave->start_date->format('M d, Y')) }}</td>
                                <td>{{ entobn($leave->end_date->format('M d, Y')) }}</td>
                                <td>{{ entobn($leave->no_of_days) }} দিন</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                    <form action="{{ url('admin/applications/approval/' . $leave->id) }}" method="POST" class="form-horizontal" role="form">
                        {{ csrf_field() }}
                        <legend class="text-center" style="font-size: 1.1em;">
                            ছুটির আবেদনের প্রেক্ষিতে আপনার মন্তব্য/মতামত
                        </legend>
                        <div class="form-group" style="width: 100%; padding-left: 20px; margin-bottom: 15px;">
                            <select name="status" class="form-control" style="width: 100%;">
                                <option value="1">অনুমোদন করা হলো</option>
                                <option value="2">বাতিল করা হলো</option>
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