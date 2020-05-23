
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Documents</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#563d7c">
    <!-- Custom styles for this template -->
    <link href="{{asset('style.css')}}" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="{{route('dashboard')}}">Головна</a>
    </div>
</nav>

<main role="main" class="container">
    <div class="jumbotron">
        @yield('content')
    </div>
</main>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
</html>
