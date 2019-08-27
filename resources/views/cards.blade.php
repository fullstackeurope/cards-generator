<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cards</title>

    <link href="{{ mix('css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="m-8 font-noway">
@foreach($workshops as $workshop)
    <div class="m-8 flex bg-repeat max-w-6xl border-8" style="background-image: url('/images/pattern.png')">
        <img class="max-w-sm" src="{{ $workshop['teacher_photo'] }}" alt="avatar"/>

        <div class="m-8">
            <div class="text-4xl font-bold">
                {{ $workshop['title'] }}
            </div>
            <div class="mt-4 text-xl">
                by {{ $workshop['teacher_name'] }} - {{ $workshop['teacher_title'] }}
            </div>
        </div>
    </div>
@endforeach
</body>
</html>
