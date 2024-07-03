@extends('layouts.app')

@section('content')
<h1>treni:</h1>
@foreach ($treni as $singoloTreno)

    <p>{{ $singoloTreno->azienda}} {{ $singoloTreno->tipologia_treno}}</p>
@endforeach

@endsection
