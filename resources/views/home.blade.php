@extends('layouts.app')

@section('content')
<!-- Qui tutto il contenuto -->

<h3>Laravel Migration Seeder</h3>

@foreach ($hotels as $hotel)
<ul>
    <li>Nome Hotel : <strong>{{$hotel->name}}</strong></li>
    <li>Indirizzo Hotel : <strong>{{$hotel->address}} {{$hotel->civic}}</strong></li>
    <li>Città Hotel : <strong>{{$hotel->city}}</strong></li>
    <li>Prezzo Hotel : <strong>{{$hotel->price}} € </strong></li>
    <li>Arrivo in Hotel : <strong>H {{$hotel->begin_at}}</strong></li>
    <li>Uscita dall'Hotel : <strong>H {{$hotel->end_at}}</strong></li>
</ul>
@endforeach


<!-- Stop è un'istruzione che serve a stoppare tutte le sezioni -->
@stop
