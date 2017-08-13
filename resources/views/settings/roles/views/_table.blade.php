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
            	@foreach($leaves as $leave)
                <tr>
                	<td>{{ $leave->title}}</td>
                    <td>{{ entobn($leave->from_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->to_date->format('M d, Y')) }}</td>
                    <td>{{ entobn($leave->year) }}</td>
                    <td>
                    	<a href="{{ url('settings/leave/'.$leave->id.'/edit')}}" class="btn btn-xs btn-info" title="Edit Leave">
							<i class="fa fa-edit"></i>
                        </a>
                        <a data-toggle="modal" href="#modal-{{ $leave->id }}" class="btn btn-xs" style="background-color: red;" title="Delete Leave?">
							<i class="fa fa-trash-o"></i>
                        </a>
                        @include('layouts.common.delModal', [
                            'id' => $leave->id,
                            'url' => 'settings/leave/'
                        ])
                    </td> 
                </tr>
                @endforeach
        </tbody>
    </table>
</div>