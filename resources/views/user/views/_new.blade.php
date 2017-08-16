<form class="form" method="POST" action="{{ url('user-management') }}" style="margin-top: 25px;">
	{{ csrf_field() }}
	<div class="row clearfix">
        <div class="form-group{{ $errors->has('role_id') ? ' has-error' : '' }}">
            <div class="col-md-2 col-md-offset-1 text-right">
                <label for="cc">ব্যবহারকারীর পদবি<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" name="role_id" value="{{ old('role_id') ? : '' }}" class="easyui-combotree" style="width:100%;height:34px;" required>
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'role_id'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="name">ব্যবহারকারীর নাম<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'name'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('fa_hu_name') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="fa_hu_name">পিতা/স্বামীর নাম<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="fa_hu_name" type="text" class="form-control" id="fa_hu_name" value="{{ old('fa_hu_name') }}">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'fa_hu_name'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('mother_name') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="mother_name">মাতার নাম<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="mother_name" type="text" class="form-control" id="mother_name" value="{{ old('mother_name') }}">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'mother_name'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="mobile">মোবাইল নাম্বার<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="mobile" type="text" class="form-control" id="mobile" value="{{ old('mobile') }}">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'mobile'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="gender">জেন্ডার<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<select class="form-control" name="gender" id="gender">
            		<option value="">জেন্ডার নির্বাচন করুন</option>
                	<option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>পুরুষ</option>
                	<option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>মহিলা</option>
                </select>
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'gender'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('div_br_off') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="div_br_off">অফিস/শাখা অফিস<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="div_br_off" type="text" class="form-control" id="div_br_off" value="{{ old('div_br_off') }}">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'div_br_off'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('join_date') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="join_date">যোগদানের তারিখ<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input type="text" name="join_date" class="form-control datepicker" id="joinDate">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'join_date'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="profile_pic">প্রোফাইল ছবি</label>
			</div>
            <div class="col-md-5">
            	<input type="file" name="profile_pic" class="form-control" id="profilePic">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'profile_pic'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('signature') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="signature">ব্যবহারকারীর স্বাক্ষর</label>
			</div>
            <div class="col-md-5">
            	<input type="file" name="signature" class="form-control" id="profilePic">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'signature'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="password">পাসওয়ার্ড<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="password" type="password" class="form-control" id="password">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'password'])
            </div>
        </div>
	</div>
	<div class="row clearfix" style="margin-top: 20px;">
		<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
			<div class="col-md-2 col-md-offset-1 text-right">
            	<label for="password_confirmation">কনফার্ম পাসওয়ার্ড<small style="color: red; font-size: 1.2em;">*</small></label>
			</div>
            <div class="col-md-5">
            	<input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
            </div>
            <div class="col-md-4">
            	@include('layouts.common.formError', ['key' => 'password_confirmation'])
            </div>
        </div>
	</div>
	<div class="row" style="margin-top: 25px;">
		<div class="col-md-8 text-right">
			<button class="btn btn-default" style="margin-right:8px;" type="reset">
				<i class="fa fa-times-circle-o"></i> বাতিল করুন
			</button>
			<button type="submit" class="btn btn-primary">
				<i class="fa fa-save"></i> সেভ করুন
			</button>
		</div>
	</div>
</form>