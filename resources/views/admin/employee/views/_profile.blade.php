<div class="row" style="margin-bottom: 30px;">
	<div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="{{ asset($user->avatar()) }}" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
    <div class="col-xs-12 col-md-8 text-center">
    	<div class="row-fluid">
			<div class="col-md-12 text-center">
				<h2 id="name">{{ $user->name }}</h2>
				<p>
					যোগদানের তারিখ : {{ $user->join_date ? entobn($user->join_date->format('M d, Y')) : 'দেয়া হয় নি' }}
				</p>
				<p>
					<i class="fa fa-phone"></i> <span id="mobile_phone">{{ $user->mobile }}</span>&nbsp;&nbsp;
					<i class="fa fa-envelope"></i> <span id="work_email">
						{{ $user->designation . ', ' . $user->div_br_off }}
					</span>
				</p>
			</div>
		</div>	
    </div>
    <div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="{{ asset($user->signature()) }}" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
</div>