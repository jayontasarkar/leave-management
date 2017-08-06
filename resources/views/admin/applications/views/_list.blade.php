<div class="table-responsive no-padding">
    <table class="table table-striped table-hover datatable">
        <thead>
            <tr>
                <th>আবেদনকারীর নাম</th>
            	<th>ছুটির বিবরণ</th>
                <th>শুরুর তারিখ</th>
                <th>শেষের তারিখ</th>
                <th>ছুটির প্রকৃতি</th>
                <th>ছুটির স্ট্যাটাস</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            	@foreach($leaves as $leave)
                <tr>
                    <td> <a href="{{ url('profile/applications') }}"> {{ $leave->user->name }}</a></td>
                	<td>{{ $leave->reason}}</td>
                    <td>{{ entobn($leave->start_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->end_date->format('M d, Y')) }}</td>
                    <td>{{ config("leave.type." . $leave->type_id) }}</td>
                    <td>
                        <span class="label label-{{ $leave->status == 2 ? 'success' : 'warning' }}">
                            {{ $leave->status == 2 ? 'অনুমোদিত' : 'পেন্ডিং' }}
                        </span>
                    </td>
                    <td>
                        <a data-toggle="modal" href="#modal-{{ $leave->id }}" class="btn btn-xs btn-default" title="Leave Application Details">
                            <i class="fa  fa-eye"></i>
                        </a> &nbsp;
                        @include('admin.applications.views._modal')

                        <a data-toggle="modal" href="#modal-note-{{ $leave->id }}" class="btn btn-xs btn-info" title="Leave Application Details">
                            <i class="fa  fa-edit"></i>
                        </a>
                        @include('admin.applications.views._note')                        
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>