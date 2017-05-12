<!DOCTYPE html>
<html lang="en">
<head>

	<title>
        @yield('title', 'Bill Calculator')
    </title>

	<meta charset='utf-8'>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' rel='stylesheet'>
	<link href='/css/a4.css' rel='stylesheet'>
	
        @stack('head')
		
</head>
	
	
	
<body>
	<div class="container">
		<div class="col-md-8">
			
			<img class="logo" alt="Lincoln-Institute-Logo" src="/images/LILP_LogoHorizontal.jpeg">
			<h1 class="heading">Faculty and Staff Biographies</h1>
				
			@if(Session::get('message') != null)
					<div class='message'>{{ Session::get('message') }}</div>
				@endif
				
			<section>
				@yield('content')
			</section>	

		</div>
			
	</div>


    @stack('body')

</body>
</html>