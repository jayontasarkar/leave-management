@inject('roles', 'App\Http\Services\RolesService')

@extends('layouts.master')

@include('layouts.common.title', ['title' => 'ছুটি অনুমোদনকারী কর্মকর্তাবৃন্দের তালিকা', 'link' => 'Test Link'])

@section('content')
	<div class="row">
		<div class="col-xs-12">
			@include('settings._tabheader')
			<div class="tab-content rendering-content">
				<div class="tab-pane active" id="tabLeaves">
					<form action="" method="POST" role="form">
						{{ csrf_field() }}
						{{ method_field('PATCH') }}

						<legend>উর্ধতন কর্মকর্তাগণের তালিকা থেকে ছুটি অনুমোদনকারী কর্মকর্তাবৃন্দের পদবি আপডেট করুন |</legend>
						<div class="row">
						@foreach($parents as $parent)
							<div class="col-md-3">
								<input type="checkbox" name="authorizer_id[]"  {{ in_array($parent->id, $role->authorizers->pluck('id')->toArray()) ? 'checked' : '' }} value="{{ $parent->id }}" >&nbsp;{{ $parent->text }}
							</div>
						@endforeach
						</div>
						<hr>
						<button type="submit" class="btn btn-primary">সেভ করুন</button>
					</form>
				</div>
			</div>
		</div>
	</div>
@stop

@section('script')
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="{{ asset('AdminLTE/easyui/js/easyui.min.js') }}"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#cc').combotree({
			data: {!! json_encode($roles->get()) !!}
		});
	});
</script>
@stop