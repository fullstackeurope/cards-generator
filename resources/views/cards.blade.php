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
    <div class="m-8 inline-flex bg-repeat border-8 content-between" style="background-image: url('/images/pattern.png')">
        <img class="h-64" src="{{ $workshop['teacher_photo'] }}" alt="avatar"/>

        <div class="m-4 flex flex-col justify-between">
            <div class="flex flex-col">
                <div class="text-4xl font-bold">
                    {{ $workshop['title'] }}
                </div>
                <div class="text-xl">
                    by {{ $workshop['teacher_name'] }} - {{ $workshop['teacher_title'] }}
                </div>
            </div>
            <div class="text-2xl">
                Full Stack Europe<br />
                October 23, 2019
            </div>
        </div>

    </div>
@endforeach
</body>
</html>
