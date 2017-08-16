@extends('layouts.master')

@include('layouts.common.title', ['title' => 'Roles', 'link' => 'Test Link'])

@section('style')
	<style>
		#list5 { color:#eee; margin-left: 40px; }
		#list5 ul { font-size: 16px; }
		#list5  ul { list-style-image: url("/images/nested.png"); padding:10px 0 10px 10px; font-size:16px; }
		#list5 ul li { color:#000;  padding:10px 0 10px 10px; }
	</style>
@stop

@section('content')
	<div id="list5">
		<ul>
			@php
				$traverse = function ($roles, $prefix = '<li>') use (&$traverse) {
				    foreach ($roles as $role) {
				    	echo PHP_EOL.$prefix . $role->text;
				    	echo '&nbsp;&nbsp;&nbsp;&nbsp;<a href="#">Edit</a>';
				        if(count($role->children))
				        {
				        	echo '<ul>';
					        $traverse($role->children);
					        echo '</ul>';
					    }
						echo '</li>';
				    }
				};
				$traverse($roles);
		    @endphp
		</ul>
	</div>
@stop