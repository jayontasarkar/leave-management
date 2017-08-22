@extends('layouts.master')

@include('layouts.common.title', [
	'title' => 'ব্যবহারকারীর ছুটি অনুমোদনকারীর তালিকা',
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
			<div class="tab-pane active" style="padding-top: 50px;">
				@if(count($ancestors))
				<form action="" method="POST" role="form">
					{{ csrf_field() }}
					<input type="hidden" name="role_id" value="{{ $user->role_id }}">

					<div class="form-group">
						@foreach($ancestors->chunk(4) as $ancestor)
							<div class="row">
								@foreach($ancestor as $value)
									<div class="col-md-3">
										<label>
											<input type="checkbox" name="authorizers[]" value="{{ $value->id }}"> &nbsp; {{ $value->text }}
										</label>
									</div>
								@endforeach
							</div>
						@endforeach
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">
							{!! config('leave.buttons.btn_save') !!}
						</button>
					</div>

				</form>
				@else
					<div class="form-group text-center">
						<a href="{{ url('user-management') }}" class="btn btn-default ">ইউজার ম্যানেজমেন্ট পৃষ্ঠা</a>
					</div>
				@endif
			</div>
		</div>

	</div>
</div>
@stop
