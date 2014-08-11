<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		 {{ get_title() }}
		 {{ stylesheet_link('hbjy/css/basic.css') }}
		 {{ stylesheet_link('hbjy/css/layer.css') }}

		 {{ javascript_include('hbjy/js/jquery-1.8.3.min.js') }}
		 {{ javascript_include('hbjy/js/vr.js') }}
		 {{ javascript_include('hbjy/js/jquery.SuperSlide.js') }}

	</head>
	<body>
        <header class="top">
        {{ javascript_include('hbjy/js/home.js') }}
        {{ javascript_include('hbjy/js/jquery.jslides.js') }}

        {{ content() }}

	</body>
</html>