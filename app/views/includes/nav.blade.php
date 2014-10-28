@section('menu')
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
		  		  	
		 <?php
	  	  $iselected = $lselected = $rselected = $cselected = $selected = '';
		  
		  	if (Request::segment(1) == '') {
		     $iselected = 'iselected'; 
		 	}
		  	elseif ( Request::segment(1) == 'lorem') {
		     $lselected = 'lselected';
		 	}
		  	elseif ( Request::segment(1) == 'random') {
		     $rselected = 'rselected';
		 	}
		  	else {
		     $selected = '';
		 	}
		   ?>
			
          <li class="{{$iselected}}"><a href="/">Home</a></li>
          <li class="{{$lselected}}"> <a href="/lorem">Lorem Ipsum</a></li>
          <li class="{{$rselected}}"><a href="/random">Random Users</a></li>
        </ul>
      </div>
    </div>
@stop