@extends('_master')

@include('includes/header')

@include('includes/nav')

@section('content')
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
		<h2>Random User's Generator</h2>
		
		{{ Form::open() }}
		{{ Form::label('num_users', 'How many Users: '), Form::text('num_users', '', array('size' => '3', 'maxlength' => '2'))  }}
		(Max: 99)
		<br/><br/>
		<h3>Include...</h3>		
		{{ Form::checkbox('birthdate'),Form::label('birthdate', ' Birthdate ') }}
		<br/>
		{{ Form::checkbox('address') ,Form::label('address', ' Address ') }}
		<br/>
		{{ Form::checkbox('profile') ,Form::label('profile', ' Profile ') }}
		<br/><br/>
		{{ Form::submit('Generate Users!') }}
		{{ Form::close() }}
	
     	@if (isset($results))
		
		<br/>
		<hr/>
			<table>
				<tr>
					<th>Name:</th>
					<?php if ( Input::get('address') == 1) { ?>
					<th>Address:</th>
					<?php } ?>
					<?php if ( Input::get('birthdate') == 1) { ?>
						<th>DOB:</th>
					<?php } ?>
					<?php if ( Input::get('profile') == 1) { ?>
						<th>Profile:</th>
					<?php } ?>
				 </tr>
					@foreach ($results as $result) 
					<tr>
						@foreach ($result as $rs) 
						<td>
							{{ $rs}}
						</td>
						@endforeach
					</tr>
					@endforeach
			</table>
     	@endif
	  </div>
    </div>
@stop
@include('includes/footer')