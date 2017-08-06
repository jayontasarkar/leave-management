@extends('layouts.master')

@include('layouts.common.title', [
	'title' => "ব্যবহারকারীর প্রোফাইলের সকল তথ্য", 
	'link' => 'User Management &nbsp;>&nbsp; User List'
])

@section('content')
<div class="row">
	<div class="col-xs-12">
		@include('profile._tabheader')
		<div class="tab-content rendering-content">
			<div class="tab-pane active" id="tabProfile">
				@include('profile.views._basicInfo')
			</div>   		
		</div>
	</div>	
</div>
@stop