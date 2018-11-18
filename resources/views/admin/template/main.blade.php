<!doctype html>

<html>
	<head>
		<title> @yield('title','Default') | Panel de Administracion</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
        <style>
            body{
                width: 94%;
                padding-left: 3%;
            }
        </style>
        
	</head>

	<body class="admin-body">
        
       @include('admin.template.partials.nav')
        
        <section class="section-admin">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> @yield('title')</h3>
                </div>
                <div class="panel-body">
                    @include('flash::message')
                     @yield('content')
                </div>
               
            </div>
           
        </section>
        <script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
	</body>
</html>