<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cards</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
          integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body class="m-8 font-noway">
@foreach($cards as $card)
    <div id="card-{{ \Illuminate\Support\Str::slug("{$card['type']} {$card['speaker_name']}") }}" class="m-8 inline-flex bg-repeat border-8 content-between" style="background-image: url('/images/pattern.png')">
        <img class="h-64" src="{{ $card['speaker_photo'] }}" alt="avatar"/>

        <div class="m-4 flex flex-col justify-between ">
            <div class="flex flex-col">
                <div class="text-4xl font-bold">
                    {{ $card['title'] }}
                </div>
                <div class="text-2xl">
                    by {{ $card['speaker_name'] }} - {{ $card['speaker_title'] }}
                </div>
            </div>
            <div class="text-2xl">
                Full Stack Europe<br />
                @if ($card['type'] === 'Workshop')
                    October 5, 2022<br />
                @else
                    October 6 & 7, 2022<br />

                @endif
                fullstackeurope.com
            </div>
        </div>

    </div>
@endforeach
</body>
</html>
