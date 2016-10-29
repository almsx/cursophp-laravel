<!DOCTYPE html>
<html>
<head>
	<title>Uber México :: @yield('title')</title>
	<link href="/libs/bootstrap/css/bootstrap.min.css" rel=stylesheet>
	<script src="/libs/bootstrap/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.min.css" rel=stylesheet>
    <style>
            /*
            html, body {
                height: 100%;
            }
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }
            .content {
                text-align: center;
                display: inline-block;
            }
            */
            .title {
                font-size: 96px;
            }
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.6.2/chosen.jquery.min.js"></script>
            <script>
                $( document ).ready(function() {
                    $(".chosen-select").chosen();
                });
            </script>
</head>
<body>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>