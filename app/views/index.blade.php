@extends('_master')

@include('includes/header')

@include('includes/nav')

@section('content')
    <div id="content_header"></div>
    <div id="site_content">
      <div id="content">
        <!-- insert the page content here -->
        <h1>Welcome to Developer's Friend</h1>
		
		This is the place you can find the three applications 
		<h2>Lorem Ipsum Generator</h2>
        <p>In publishing and graphic design, lorem ipsum is a placeholder text commonly used to demonstrate the graphic elements of a document or visual presentation. By replacing the distraction of meaningful content with filler text of scrambled Latin it allows viewers to focus on graphical elements such as font, typography, and layout.</p>
		
        <h2>Random Users Generator</h2>
        <p>Create random user data for your applications. Like Lorem Ipsum, but for people.</p>      

        <h2>xkcd Password Generator</h2>
        <p>Continuing from Project 2, generating xkcd style passwords. The same logic has been used to generate the password but this time using 		   Laravel Framework</p>      


      </div>
    </div> 
@stop

@include('includes/footer')