<?php

Route::get('/', function () {
    return redirect('login');
});

// Auth Routes
Route::group(['namespace' => 'Auth'], function() {
	Route::get('/login', 'LoginController@showLoginForm')->name('login');
	Route::post('/login', 'LoginController@login')->name('login');
	Route::post('/logout', 'LoginController@logout')->name('logout');
});

// Logged In User Profile
Route::get('/profile', 'ProfileController@index');
Route::get('/profile/edit', 'ProfileController@edit');
Route::patch('/profile/edit', 'ProfileController@update');
Route::get('/profile/password', 'ProfileController@getPassword');
Route::patch('/profile/password', 'ProfileController@patchPassword');

// Uploads
Route::post('/profile/upload', 'UploadsController@uploadProfile');
Route::post('/signature/upload', 'UploadsController@uploadSignature');

// Logged in user applications
Route::get('/profile/applications', 'LeaveApplicationsController@index');
Route::get('/profile/applications/{application}', 'LeaveApplicationsController@show');
Route::get('/profile/leave', 'LeaveApplicationsController@leaves');

// Apply for Leave
Route::get('/apply', 'ApplyController@create');
Route::post('/apply', 'ApplyController@store');

// Restrict for Admin Only
Route::group(['namespace' => 'Admin', 'middleware' => ['auth']], function() {
	Route::resource('/user-management', 'UserManagementController');
	Route::resource('/settings/leave', 'LeaveManagementController');
	Route::resource('admin/leaves', 'EmployeeLeaveController');
	Route::get('employee/{user}/leaves', 'EmployeeProfileController@show');
	Route::get('employee/{user}/reports', 'EmployeeProfileController@report');
	Route::post('admin/applications/approval/{application}', 'LeaveApprovalController@update');
});

Route::group(['namespace' => 'Applicant'], function() {
    Route::resource('applications', 'ApplicationsController');
});

Route::get('/dashboard', 'DashboardController@index')->name('home');
