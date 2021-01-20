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
        {{ $name }} has requested a consultation! 
    </h1>
    <hr>

    <h2 class="text-center">
        - Their email is {{ $email }}. 
        <br>
        - Their company is {{ $company }}
        <br>
  
        - Their phone number is {{ $phoneNumber }}
        <br>
        - Their budget is {{ $budget }}
        <br>
        @if($reference != null)
        - They heard about us from {{ $reference }}
        <br>
        @endif
        - What they are looking for is:
        <br>
        {{ $summary }}
    </h2>
    
    @include('partials.footer')
</body>
</html>