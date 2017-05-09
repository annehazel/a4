<!DOCTYPE html>
<html>
<head>
	<title>
        @yield('title', 'Bill Calculator')
    </title>

	<meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='css/a4.css' rel='stylesheet'>


        @stack('head')
</head>
	
<body>
	
	<div class="container">
		<div class="col-md-8">

				
			@if(Session::get('message') != null))
				<div class='message'>{{ Session::get('message') }}</div>
			@endif
				
			<section>
					@yield('content')
			</section>	

		</div>
			
	</div>
		


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    @stack('body')

</body>
</html>