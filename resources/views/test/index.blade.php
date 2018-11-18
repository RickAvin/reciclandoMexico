
<!doctype html>

<html>
	<head>
		<title>Vista</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/general.css')}}">
	</head>

	<body>
        Hola
        <br><br>

        <h1>
            {{$prueba->nombre}}
        </h1>
        <hr>
        {{$prueba->empresa->nombre}}
        <hr>
        @if(true)
        {{"Laravel"}}
        @endif

	</body>
</html>
