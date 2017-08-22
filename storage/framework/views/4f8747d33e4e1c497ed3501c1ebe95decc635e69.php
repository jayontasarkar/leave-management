<div class="row" style="margin-bottom: 30px;">
	<div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="<?php echo e(asset($user->avatar())); ?>" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
    <div class="col-xs-12 col-md-8 text-center">
    	<div class="row-fluid">
			<div class="col-md-12 text-center">
				<h2 id="name"><?php echo e($user->name); ?></h2>
				<p>
					যোগদানের তারিখ : <?php echo e($user->join_date ? entobn($user->join_date->format('M d, Y')) : 'দেয়া হয় নি'); ?>

				</p>
				<p>
					<i class="fa fa-phone"></i> <span id="mobile_phone"><?php echo e($user->mobile); ?></span>&nbsp;&nbsp;
					<i class="fa fa-envelope"></i> <span id="work_email">
						<?php echo e($user->role->text . ', ' . $user->div_br_off); ?>

					</span>
				</p>
			</div>
		</div>
    </div>
    <div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="<?php echo e(asset($user->signature())); ?>" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
</div>