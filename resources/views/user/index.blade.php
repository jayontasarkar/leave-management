@inject('roles', 'App\Http\Services\RolesService')

@extends('layouts.master')
@php
	$title = Request::is('user-management') ? 'সকল এডমিন ব্যবহারকারীর তালিকা' : 'নতুন ব্যবহারকারী যুক্ত করুন';
@endphp
@include('layouts.common.title', [
	'title' => "ইউজার ম্যানেজমেন্ট | " . $title,
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
	        <li class="{{ Request::is('user-management') ? 'active' : '' }}">
	        	<a id="tabEmployee" href="{{ url('user-management') }}">ব্যবহারকারীর তালিকা</a>
	        </li>
	        <li class="{{ Request::is('user-management/create') ? 'active' : '' }}">
	        	<a id="tabEmployee" href="{{ url('user-management/create') }}">নতুন ব্যবহারকারী</a>
	        </li>
		</ul>
		<div class="tab-content rendering-content">
			<div class="tab-pane{{ Request::is('user-management') ? 'active' : '' }}" id="tabPageEmployee">
				@if($users->count())
					@include('user.views._table')
	            @else
					<h3 class="text-center">কোনো ব্যাবহারকারী খুঁজে পাওয়া যায় নি</h3>
	            @endif
			</div>
			<div class="tab-pane{{ Request::is('user-management/create') ? 'active' : '' }}" id="tabNewEmployee">
				@include('user.views._new')
			</div>
		</div>
	</div>
</div>
@stop

@section('script')
@if( Request::is('user-management') &&  count($users))
    @include('layouts.common.dt-search')
@else
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
@endif
@stop