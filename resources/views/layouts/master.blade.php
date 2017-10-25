<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://v4-alpha.getbootstrap.com/favicon.ico">

    <title>Blog Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
          rel="stylesheet"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
          crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
</head>

<body>


@include ('layouts.nav')

<div class="container">
    <div class="row">
        @yield ('content')

        @include ('layouts.sidebar')
    </div>

</div>

@include ('layouts.footer')

</body>
</html>
