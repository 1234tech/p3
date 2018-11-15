<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', config('app.name'))</title>
    <meta charset='utf-8'>


    <link href="{{asset('css/projectthree.css')}}" rel="stylesheet" />

<body>

<h1>Feedback Request</h1>
<section>
    @yield('blankForm')
    @yield('feedbackResults')
</section>


</body>
</html>
