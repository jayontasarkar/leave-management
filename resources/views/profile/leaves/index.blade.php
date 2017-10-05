@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "ব্যবহারকারীর সকল ছুটির আবেদনপত্রের তালিকা",
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfile">
				<div class="well" style="padding: 8px;">
					<div class="row">
						<div class="col-md-4">
							<a href="{{ url('profile/leave') }}" class="btn btn-primary btn-sm">
								<i class="fa fa-plus"></i>&nbsp;ছুটি এবং আবেদনপত্রের রিপোর্ট
							</a>
						</div>
						<div class="col-md-8 text-right">
							<form action="" method="GET" class="form form-inline" role="form">
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="type" id="" class="form-control">
										<option value="">ছুটির প্রকৃতি নির্বাচন</option>
										@foreach(config('leave.type') as $key => $type)
											<option value="{{ $key }}" {{ Request::input('type') == $key ? 'selected' : '' }}>
												{{ $type }}
											</option>
										@endforeach
									</select>
								</div>
								<div class="form-group">
									<label class="sr-only" for="">label</label>
									<select name="status" id="" class="form-control">
										<option value="">ছুটির স্ট্যাটাস নির্বাচন</option>
										<option value="2">অনুমোদিত ছুটিসমূহ</option>
										<option value="1">পেন্ডিং ছুটিসমূহ</option>
									</select>
								</div>
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
					@include('profile.leaves.views._applications')
	            @else
					<h3 class="text-center">কোনো রেজাল্ট খুঁজে পাওয়া যায় নি</h3>
	            @endif

			</div>
		</div>
	</div>
</div>
@stop

@section('script')
	@include('layouts.common.dt-export', [
		'heading' => 'সকল ছুটির আবেদনপত্রের তালিকা',
		'columns' => '0, 1, 2, 3, 4, 5'
	])
	<script type="text/javascript">
		$(document).ready(function() {
			$(".form").on('submit', function() {
		        $(this).find(":input").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        $(this).find(":select").filter(function(){ return !this.value; }).attr("disabled", "disabled");
		        return true;
		    });
		});
	</script>
@endsection