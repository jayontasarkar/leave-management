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
            	@foreach(config('leave.type') as $key => $value)
                <tr>
                    <td>{{ entobn($value) }} ({{ entobn(config("leave.leaves." . $key)) }})</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->count() : 0) }}</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 1)->count() : 0) }}</td>
                    <td>{{ entobn(count($leaves) ? $leaves->where('type_id', $key)->where('status', 2)->count() : 0) }}</td>
                    <td>{{ entobn($applied  = count($leaves) ? $leaves->where('type_id', $key)->sum('no_of_days') : 0) }}</td>
                    <td>{{ entobn($approved = count($leaves) ? $leaves->where('type_id', $key)->where('status', 2)->sum('no_of_days') : 0) }}</td>
                    <td>{{ entobn($applied - $approved) }}</td>
                </tr>
                @endforeach
        </tbody>
    </table>
</div>