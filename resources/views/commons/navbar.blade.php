<header>
  <nav class="navbar navbar-default navbar-static-top">
  	<div class="container">
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed"data-toggle="collapse"data-target="#bs-example-navber-collapse-1"aria-expanded="false">
  				<span class="sr-only">Toggle navigation</span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  				<span class="icon-bar"></span>
  			</button>
  			<a class="navbar-left" href="/"><img src="{{ asset("images/logo.png") }}" alt="Monolist"></a>
  		</div>
  		
  		<div class="collapse navbar-collapse" id="bs-example-navber-collapse-1">
  			<ul class="nav navbar-nav navbar-right">
  			  <!--@if (Auth::check())-->
    			<!--  <li>{!! link_to_route('users.index', 'Users') !!}</li>-->
    			<!--  <li class="dropdown">-->
    			<!--    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>-->
       <!--       <ul class="dropdown-menu">-->
       <!--         <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::user()->id]) !!}</li>-->
       <!--         <li>{!! link_to_route('users.favorites', 'Favorites', ['id' => Auth::user()->id]) !!}</li>-->
       <!--         <li role="separator" class="divider"></li>-->
       <!--         <li>{!! link_to_route('logout.get', 'Logout') !!}</li>-->
       <!--       </ul>-->
    			<!--  </li>-->
  			  <!-- @else-->
    				<li><a href="#">新規登録</a></li>
    				<li><a href="#">ログイン</a></li>
    			 <!--@endif-->
  			</ul>
  		</div>
  	</div>
  </nav>  
</header>
