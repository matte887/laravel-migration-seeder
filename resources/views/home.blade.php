<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container">
        <h2>Treni</h2>
        <table>
            <tr>
                <th>Azienda</th>
                <th>Stazione di partenza</th>
                <th>Binario di partenza</th>
                <th>Stazione di arrivo</th>
                <th>Binario di arrivo</th>
                <th>Orario di partenza</th>
                <th>Orario di arrivo</th>
                <th>Codice treno</th>
                <th>Numero carrozze</th>
                <th>Ritardo</th>
                <th>Cancellato</th>
            </tr>
            @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->azienda }}</td>
                    <td>{{ $train->stazione_partenza }}</td>
                    <td>{{ $train->binario_partenza }}</td>
                    <td>{{ $train->stazione_arrivo }}</td>
                    <td>{{ $train->binario_arrivo }}</td>
                    <td>{{ $train->orario_partenza }}</td>
                    <td>{{ $train->orario_arrivo }}</td>
                    <td>{{ $train->codice_treno }}</td>
                    <td>{{ $train->numero_carrozze }}</td>
                    <td>{{ $train->in_orario }}</td>
                    <td>{{ $train->cancellato }}</td>
                </tr>
            @endforeach
        </table>
    </div>
</body>

</html>
