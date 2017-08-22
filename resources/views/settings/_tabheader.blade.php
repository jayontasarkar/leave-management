<ul class="nav nav-tabs" id="modTab" style="margin-bottom:0px;margin-left:5px;border-bottom: none;">
    <li class="{{ Request::is('settings/leave') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('settings/leave') }}">ছুটি ব্যাবস্থাপনা</a>
    </li>
    <li class="{{ Request::is('settings/roles') ? 'active' : '' }}">
    	<a id="tabEmployee" href="{{ url('settings/roles') }}">পদমর্যাদা ব্যবস্থাপনা</a>
    </li>
</ul>
