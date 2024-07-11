<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($trains as $train)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $train->codice_treno }}</h5>
            <p class="card-text">il treno parte da: {{ $train->stazione_partenza }} il {{ $train->orario_partenza }} ed arriva a: {{ $train->stazione_arrivo }} il {{ $train->orario_arrivo }}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach

</body>

</html>