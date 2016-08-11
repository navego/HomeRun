<!DOCTYPE html>
<html dir="rtl" land="he">
<head>
	<title>home.run | @yield('page-title')</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">Home.run</a>
	    </div>
	    <div>
	    	<label>User: {{ Auth::user()->first_name }}</label>
	    </div>
	  </div><!-- /.container-fluid -->
	</nav>
	
	@yield('content')
	
	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::secure('src/css/app.css') }}">
</body>
</html>