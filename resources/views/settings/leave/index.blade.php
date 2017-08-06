@extends('layouts.master')
@php
	$title = Request::is('settings/leave') ? 'বাৎসরিক ছুটি ব্যাবস্থাপনা' : 'বাৎসরিক নতুন ছুটি';
@endphp
@include('layouts.common.title', [
	'title' => $title, 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">

		@include('settings._tabheader')

		<div class="tab-content rendering-content">
			<div class="tab-pane {{ Request::is('settings/leave') ? 'active' : '' }}" id="tabLeaves">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-6">
							<a href="{{ url('settings/leave/create') }}" class="btn btn-primary btn-sm">
								<i class="fa fa-plus"></i>&nbsp;নতুন ছুটি যোগ করুন
							</a>
						</div>
						<div class="col-md-6 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="year" id="" class="form-control">
										<option value="">বছর সিলেক্ট করুন</option>
										@for($i = 2017; $i < 2050; $i++)
										<option value="{{ $i }}" {{ (Request::input('year') ? : date('Y')) == $i ? 'selected' : '' }}>
											{{ entobn($i) }}
										</option>
										@endfor
									</select>
								</div>
								<button type="submit" class="btn btn-primary">
									<i class="fa fa-search"></i> সার্চ করুন
								</button>
							</form>
						</div>
					</div>
				</div>
				@if($leaves->count())
					@include('settings.leave.views._table')
	            @else
					<h3 class="text-center">ছুটি ব্যাবস্থাপনার কোনো তথ্য খুঁজে পাওয়া যায় নি</h3>
	            @endif
			</div>   		
		</div>
	</div>	
</div>
@stop

@section('script')
@if(count($leaves))
    @include('layouts.common.dt-search')
@endif
<script type="text/javascript">
	$(document).ready(function() {
		$('.datepicker').datepicker({
			changeMonth: true,
            changeYear: true,
            yearRange: "{{ \Carbon\Carbon::now()->subYears(90)->format('Y') . ':' . \Carbon\Carbon::now()->format('Y') }}"
		});	
		$(".form").on('submit', function() {
	      $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
	      return true;
	    });	
	});
</script>
@stop