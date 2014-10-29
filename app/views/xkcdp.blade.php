@extends('_master')

@include('includes/header')

@include('includes/nav')

@section('content')
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
		<h2>xkcd Password Generator</h2>
		
		{{ Form::open() }}
		{{ Form::label('num_words', 'How many Words?: '), Form::text('num_words', '5', array('size' => '3', 'maxlength' => '1'))  }}
		(Max: 9)
		@if ($errors->has('num_words')) <div id="error"> * {{ $errors->first('num_words') }} * </div>@endif
		<br/>
		<h3>Include...</h3>		
		<table>
			<tr>
				<td>
					{{ Form::label('random_num')  }}
				</td>
				<td>
					{{ Form::checkbox('random_num')}}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::label('special_chars')  }}
				</td>
				<td>
					{{ Form::checkbox('special_chars')}}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::label('separator')  }}
				</td>
				<td>
					{{Form::text('separator', '', array('size' => '3', 'maxlength' => '1'))}}
				</td>
			</tr>
			<tr>
				<td>
					{{ Form::label('make_upper')  }}
				</td>
				<td>
					{{ Form::checkbox('make_upper')}}
				</td>
			</tr>
			
		</table>
		
		{{ Form::submit('Generate Password!') }}
		{{ Form::close() }}	
	
     	@if (isset($result_password))
		<br/>
		<hr/>
		<br/>
		<div id="password">
		  {{ $result_password }}
		</div>
     	@endif
		
	  </div>
    </div>
@stop
@include('includes/footer')