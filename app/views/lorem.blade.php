@extends('_master')

@include('includes/header')

@include('includes/nav')

@section('content')
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
		<h2>Lorem Ipsum Generator</h2>
		
		<p>How many paragrahs do you want to generate?</p>
		{{ Form::open() }}
		{{ Form::text('num_paragraphs', '5', array('size' => '10', 'maxlength' => '2'))  }} (Max: 99)
		{{ Form::submit('Generate Text!') }}
		@if ($errors->has('num_paragraphs')) <div id="error"> * {{ $errors->first('num_paragraphs') }} * </div>@endif
		{{ Form::close() }}
		
     	@if (isset($paragraphs))
		<br/>
		<hr/>
		  <p>{{implode('<p>', $paragraphs )}}</p>
     	@endif
	  </div>
    </div>
@stop

@include('includes/footer')