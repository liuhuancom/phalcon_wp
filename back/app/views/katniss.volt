<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        {{ get_title() }}

        {# stylesheet_link('bootstrap/css/bootstrap.css') #}
        {# stylesheet_link('bootstrap/css/bootstrap-responsive.css') #}
        {# stylesheet_link('css/style.css') #}

        {{ stylesheet_link('css/style.default.css') }}
        {{ javascript_include('js/jquery-1.9.1.min.js') }}
        {{ javascript_include('js/jquery-migrate-1.1.1.min.js') }}

        {{ stylesheet_link('prettify/prettify.css') }}
        {{ javascript_include('prettify/prettify.js') }}
        {{ javascript_include('js/jquery-ui-1.9.2.min.js') }}
        {{ javascript_include('js/jquery.flot.min.js') }}
        {{ javascript_include('js/jquery.flot.resize.min.js') }}
        {{ javascript_include('js/bootstrap.min.js') }}
        {{ javascript_include('js/modernizr.min.js') }}
        {{ javascript_include('js/detectizr.min.js') }}
        {{ javascript_include('js/jquery.cookie.js') }}
        {{ javascript_include('js/custom.js') }}



        <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->



        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Your invoices">
        <meta name="author" content="Phalcon Team">
    </head>
    <body>
        {{ content() }}





        {# javascript_include('js/jquery.min.js') #}
        {# javascript_include('bootstrap/js/bootstrap.js') #}
        {# javascript_include('js/utils.js') #}


        <div></div>
    </body>
</html>