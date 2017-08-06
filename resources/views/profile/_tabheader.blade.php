<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="{{ Request::is('profile') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile') }}">সকল বৃত্তান্ত</a>
    </li>
    <li class="{{ Request::is('profile/leave') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile/leave') }}">ছুটির তালিকা</a>
    </li>
    <li class="{{ Request::is('profile/applications') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('profile/applications') }}">ছুটির আবেদনপত্র</a>
    </li>
    <li class="{{ Request::is('profile/edit') ? 'active' : '' }}">
    	<a id="tabProfileEdit" href="{{ url('profile/edit') }}">তথ্য পরিবর্তন</a>
    </li>
    <li class="{{ Request::is('profile/password') ? 'active' : '' }}">
    	<a id="tabProfileEdit" href="{{ url('profile/password') }}">পাসওয়ার্ড পরিবর্তন</a>
    </li>
</ul> 
