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
		{{ Form::text('num_paragraphs', '', array('size' => '10', 'maxlength' => '2'))  }}
		{{ Form::submit('Generate Text!') }}
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