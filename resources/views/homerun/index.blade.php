<!DOCTYPE html>
<html dir="rtl" land="he">
<head>
	<title>home.run</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
	<div class="container">
		<img id="front-image" src="{{ URL::secure('assets/img/stock-photo-under-construction.jpg') }}"></img>
		<div>
			<a class="btn btn-default" href="{{ URL::secure(route('frontend.index')) }}" role="button">EasyAdmin</a>
			<a class="btn btn-primary" href="{{ URL::secure(route('firm.create')) }}" role="button">למסכים</a>
		</div>
	</div>

	<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ URL::secure('src/css/app.css') }}">
</body>
</html>