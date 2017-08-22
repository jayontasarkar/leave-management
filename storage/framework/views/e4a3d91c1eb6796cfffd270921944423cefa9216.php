<div class="row">
	<div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="<?php echo e($profile->avatar()); ?>" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
    <div class="col-xs-12 col-md-8 text-center">
    	<div class="row-fluid">
			<div class="col-md-12 text-center"><h2 id="name"><?php echo e($profile->name); ?></h2></div>
		</div>	
		<div class="row-fluid">
			<div class="col-md-12 text-center">
				<p>
					<i class="fa fa-phone"></i> <span id="mobile_phone"><?php echo e($profile->mobile); ?></span>&nbsp;&nbsp;
					<i class="fa fa-envelope"></i> <span id="work_email">
						<?php echo e($profile->designation . ', ' . $profile->div_br_off); ?>

					</span>
				</p>
			</div>
		</div>
	    <div class="row-fluid">
	    	<div class="col-xs-12" style="font-size:18px;border-bottom: 1px solid #DDD;margin-bottom: 10px;padding-bottom: 10px;">
				<a class="btn btn-small btn-success" style="margin-right:10px;"
					href="<?php echo e(url('profile/edit')); ?>" 
				>
					<i class="fa fa-edit"></i> তথ্য পরিবর্তন
				</a>
				<button class="btn btn-small btn-primary" type="button" style="margin-right:10px;"
				>
					<i class="fa fa-upload"></i> ছবি আপলোড
				</button>
				<button id="employeeDeleteProfileImage" onclick="modJs.deleteProfileImage(1);return false;" class="btn btn-small btn-warning" type="button" style="margin-right:10px;">
					<i class="fa fa-upload"></i> সাক্ষর আপলোড
				</button>
				<button id="employeeUpdatePassword" onclick="modJs.changePassword();return false;" class="btn btn-small btn-danger" type="button" style="margin-right:10px;">
					<i class="fa fa-lock"></i> পাসওয়ার্ড পরিবর্তন
				</button>
			</div>
	    </div>	
    </div>
    <div class="col-xs-12 col-md-2">
		<div class="row-fluid">
			<div class="col-xs-12" style="text-align: center;">
				<img id="profile_image_1" src="<?php echo e($profile->signature()); ?>" class="img-polaroid img-thumbnail" style="max-width: 140px;max-height: 140px;">
			</div>
		</div>
	</div>
</div>
<div class="row" style="border-top: 1px; margin-top: 20px;">
	<div class="col-xs-6 col-md-1" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;font-size:13px;">নম্বর</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="employee_id">
			EMP<?php echo e($profile->id); ?>

		</label>
	</div>
	<div class="col-xs-6 col-md-3" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;">পিতা/স্বামীর নাম</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="nic_num">
			<?php echo e($profile->fa_hu_name); ?>

		</label>
	</div>
	<div class="col-xs-6 col-md-3" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;">মাতার নাম</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="nic_num">
			<?php echo e($profile->mother_name); ?>

		</label>
	</div>
	<div class="col-xs-6 col-md-2" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;">যোগদান</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="ssn_num">
			<?php echo e($profile->join_date ? $profile->join_date->format('M d, Y') : 'দেয়া নেই'); ?>

		</label>
	</div>
	<div class="col-xs-6 col-md-2" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;">স্ট্যাটাস</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="ssn_num">
			<?php echo e($profile->active ? 'একটিভ আছে ' : 'একটিভ নেই'); ?>

		</label>
	</div>
	<div class="col-xs-6 col-md-1" style="font-size:16px;">
		<label class="control-label col-xs-12" style="font-size:13px;">জেন্ডার</label>
		<label class="control-label col-xs-12 iceLabel" style="font-size:13px;font-weight: bold;" id="ssn_num">
			<?php echo e(ucfirst($profile->gender)); ?>

		</label>
	</div>
</div>