<form class="form" method="POST" action="{{ route('roles.update', [$role]) }}" style="margin-top: 25px;padding-bottom: 10px;">
    {{ csrf_field() }}
    {{ method_field('PATCH') }}
    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group{{ $errors->has('name')  ? ' has-error' : '' }}">
            <div class="col-md-3 text-right">
                <label for="name">পদবীর নাম (ইংরেজিতে)<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="name"  class="form-control" id="name"  value="{{ old('name') ? : $role->name }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'name'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group{{ $errors->has('text')  ? ' has-error' : '' }}">
            <div class="col-md-3 text-right">
                <label for="text">পদবীর নাম (বাংলায়)<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input type="text" name="text"  class="form-control" id="text"  value="{{ old('text') ? : $role->text }}">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'text'])
            </div>
        </div>
    </div>
    <div class="row clearfix" style="margin-bottom: 25px;">
        <div class="form-group{{ $errors->has('parent_id')  ? ' has-error' : '' }}">
            <div class="col-md-3 text-right">
                <label for="parent_id">নিকটস্থ উর্ধতন পদবি<small style="color: red; font-size: 1.2em;">*</small></label>
            </div>
            <div class="col-md-5">
                <input id="cc" value="{{ old('parent_id') ? : $role->parent_id }}" style="width: 430px;">
            </div>
            <div class="col-md-4">
                @include('layouts.common.formError', ['key' => 'parent_id'])
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 text-right">
            <a class="btn btn-link" style="margin-right:8px;" href="{{ route('roles.authorizations.edit', [$role]) }}">
                অনুমোদনকারী উর্ধতন পদবি পরিবর্তন
            </a>
            </button><button class="btn btn-default" style="margin-right:8px;" type="reset">
                {!! config('leave.buttons.btn_reset') !!}
            </button>
            <button type="submit" class="btn btn-primary">
                {!! config('leave.buttons.btn_save') !!}
            </button>
        </div>
    </div>
</form>