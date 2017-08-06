@inject('calendar', 'App\Http\Services\CalendarService')

@extends('layouts.master')

@include('layouts.common.title', ['title' => 'প্রথম পাতা / ড্যাশবোর্ড', 'link' => 'Dashboard'])

@section('content')
<div class="row">
    <div class="col-sm-3 col-xs-12">
	    <div class="small-box bg-aqua">
	        <div class="inner">
	            <h3>
	                People
	            </h3>
	            <p id="numberOfEmployees">
	                5 Employees
	            </p>
	        </div>
	        <div class="icon">
	            <i class="ion ion-person-stalker"></i>
	        </div>
	        <a href="https://icehrm.com/app/jtcsolutions/?g=admin&amp;n=employees&amp;m=admin_Employees" class="small-box-footer" id="employeeLink">
	            Manage Employees <i class="fa fa-arrow-circle-right"></i>
	        </a>
	    </div>
	</div>
	<div class="col-sm-3 col-xs-12">
		<div class="small-box bg-yellow">
		    <div class="inner">
		        <h3>Users</h3>
		        <p id="numberOfUsers">
		            3 Users
		        </p>
		    </div>
		    <div class="icon">
		        <i class="ion ion-person-add"></i>
		    </div>
		    <a href="{{ url('user-management') }}" class="small-box-footer" id="usersLink">
		        Manage Users <i class="fa fa-arrow-circle-right"></i>
		    </a>
		</div>
	</div>
	<div class="col-sm-3 col-xs-12">
	    <div class="small-box bg-red">
	        <div class="inner">
	            <h3>Leave</h3>
	            <p id="numberOfLeaves">0 Upcoming</p>
	        </div>
	        <div class="icon">
	            <i class="ion ion-calendar"></i>
	        </div>
	        <a href="{{ url('admin/leaves') }}" class="small-box-footer" id="leaveLink">
	            Leave Management <i class="fa fa-arrow-circle-right"></i>
	        </a>
	    </div>
	</div>
	<div class="col-sm-3 col-xs-12">
	    <div class="small-box bg-green">
	        <div class="inner">
	            <h3>Settings</h3>
	            <p>
	                Configure Settings
	            </p>
	        </div>
	        <div class="icon">
	            <i class="ion ion-settings"></i>
	        </div>
	        <a href="{{ url('settings/leave') }}" class="small-box-footer" id="settingsLink">
	            Update Settings <i class="fa fa-arrow-circle-right"></i>
	        </a>
	    </div>
	</div>
</div>	
<div class="row" style="margin-top: 20px;">
	<div class="col-md-12">
		<h3 class="text-center text-green" style="margin-bottom: 20px;">
			বাৎসরিক সরকারি/প্রাতিষ্ঠানিক ছুটির তালিকা
		</h3>
        <div id="calendar" style="background: #fff; padding: 10px; border-radius: 5px;">
        	<!-- displays calendar here -->
        </div>
	</div>
</div>
@stop

@section('script')
<script type="text/javascript">
    $(function() {
        $('#calendar').fullCalendar({
        	height: 375,
        	contentHeight: 400,
        	editable: false,
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {//This is to add icons to the visible buttons
                prev: "<span class='fa fa-caret-left'></span>",
                next: "<span class='fa fa-caret-right'></span>",
                today: 'আজ',
                month: 'মাসিক',
                week: 'সাপ্তাহিক',
                day: 'দৈনিক'
            },
            events: {!! json_encode( count($calendar->generate()) ? $calendar->generate() : [] ) !!},
            droppable: false,
            borderColor: '#ff0000'
        });
    });    
</script>    
@stop