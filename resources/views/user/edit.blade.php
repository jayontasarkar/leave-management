@inject('roles', 'App\Http\Services\RolesService')

@extends('layouts.master')

@include('layouts.common.title', [
	'title' => 'ব্যবহারকারীর তথ্য পরিবর্তন / সংশোধন করুন',
	'link' => 'User Management &nbsp;>&nbsp; Edit User'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
	        <li>
	        	<a id="tabEmployee" href="{{ url('user-management') }}">ব্যবহারকারীর তালিকা</a>
	        </li>
	        <li>
	        	<a id="tabEmployee" href="{{ url('user-management/create') }}">নতুন ব্যবহারকারী</a>
	        </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane active">
				@include('user.views._edit')
			</div>
		</div>

	</div>
</div>
@stop

@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="//code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
<script src="{{ asset('AdminLTE/easyui/js/easyui.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "{{ \Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}"
		});
		$('.easyui-combotree').combotree({
			data: {!! json_encode($roles->get()) !!},
			onlyLeafCheck: false
		});
	});
</script>
@stop