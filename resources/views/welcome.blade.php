<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main class="bg-dark">
        <div class="d-flex flex-wrap">
            @foreach ($trains as $train)
            <div class="card w-25 m-5">
                <h2>{{$train->company}}</h2>
                <p>{{$train->start_station}}</p>
                <p>{{$train->arrival_station}}</p>
                <p>{{$train->start_time}}</p>
                <p>{{$train->arrivals_time }}</p>
                <p>{{$train->number_of_carriages}}</p>
                @if ($train->in_time != true )
                    <h4>cancelled</h4>
                @endif
            </div>
            @endforeach
        </div>
    </main>

</body>

</html>