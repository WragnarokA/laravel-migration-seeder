@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Train Table</h1>
    <div class="row">

        <table  class="table">
            <thead>
                <tr>
                    <th>Numero del treno</th>
                    <th>Numero di carrozza</th>
                    <th>Città di partenza</th>
                    <th>Orario di partenza</th>
                    <th>Città di arrivo</th>
                    <th>Orario di arrivo</th>
                </tr>
             </thead>

            @foreach ($trains as $train)
            <tbody>
              <tr>
                <td>{{$train->codice_treno}}</td>
                <td>{{$train->numero_carrozze}}</td>
                <td>{{$train->stazione_di_partenza}}</td>
                <td>{{$train->orario_di_partenza}}</td>
                <td>{{$train->stazione_di_arrivo}}</td>
                <td>{{$train->orario_di_arrivo}}</td>
              </tr>
            </tbody>  
                
            @endforeach
        </table>
    </div>
   

</div>
@endsection