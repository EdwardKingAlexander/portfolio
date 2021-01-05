<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/rocky.css') }}">
    <title>Consultation Confirmation</title>
</head>
<body>
    <h1>
        Hey {{ $name }}! Thank you for your interest!
    </h1>
    <hr>

    <h3>
        We will get in touch with you as soon as possible
    </h3>
    
    @include('partials.footer')
</body>
</html>