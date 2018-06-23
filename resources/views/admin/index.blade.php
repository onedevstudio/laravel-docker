<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Admin</title>
    <link href="{{asset('stylesheets/admin.css')}}" rel="stylesheet" type="text/css">
    <script>window.Laravel = <?= json_encode(['csrfToken' => csrf_token()]); ?></script>
</head>
<body>
    <div id="app"></div>
    <script src="{{asset('javascripts/admin.js')}}"></script>
</body>
</html>
