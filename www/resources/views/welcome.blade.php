<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link href="{{asset('stylesheets/app.css')}}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app"></div>
        <script>window.Laravel = <?= json_encode(['csrfToken' => csrf_token()]); ?></script>
        <script src="{{asset('javascripts/app.js')}}"></script>
    </body>
</html>
