<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>


    <link href='/css/projectthree.css' rel='stylesheet'>

</head>
<body>

<section>
    @yield('content')
    @yield('results')
</section>


</body>
</html>
