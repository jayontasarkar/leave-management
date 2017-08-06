@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "আপনার লগইন পাসওয়ার্ড পরিবর্তন করুন", 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfilePassword">
				@include('profile.views._password')
			</div>   		
		</div>
	</div>	
</div>
@stop