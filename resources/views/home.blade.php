<!doctype html>
<html>
<head>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
   
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <h1>This is example from ItSolutionStuff.com</h1>
    <div id="app">
        <example-component home-route="{{ route('api:product-store') }}"></example-component>
    </div>
</body>
</html>