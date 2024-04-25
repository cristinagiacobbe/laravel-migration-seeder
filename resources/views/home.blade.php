@extends('layouts.app')

@section('content')

<<body class="bg-danger">
    <div class="container">
        <h1 class="my-5">Tabella treni</h1>

        <table class="table table-bordered border-primary my-5 ">
            <thead>
                <tr>
                    <th scope="col">Tipo di treno</th>
                    <th scope="col">Stazione di partenza</th>
                    <th scope="col">Stazione di arrivo</th>
                    <th scope="col">Ora di partenza</th>
                    <th scope="col">Ora di arrivo</th>
                    <th scope="col">Numero treno</th>
                    <th scope="col">In orario</th>
                    <th scope="col">Cancellato</th>
                </tr>
            </thead>

            <tbody class="table-group-divider">
                @foreach ($trains as $train)
                <tr>
                    <td>{{$train->Azienda}}</td>
                    <td>{{$train->Departure_station}}</td>
                    <td>{{$train->Arrival_station}}</td>
                    <td>{{$train->Departure_time}}</td>
                    <td>{{$train->Arrival_time}}</td>
                    <td>{{$train->Train_code}}</td>
                    <td>{{$train->On_time}}</td>
                    <td>{{$train->Deleted}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    </body>


    @endsection