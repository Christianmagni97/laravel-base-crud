@extends('app')
@section('main-section')
<div class="container justify-content-center">
        <div class="row ">
            <section class=" text-center px-3">
                <div class="card col-6 mb-3">
                    <h1 class="card-header">{{ $animal->nome }}</h1>
                    <div class="card-body">
                        <h5 class="card-title">Specie: {{ $animal->specie }}</h5>
                        <p class="card-text">Habitat: {{ $animal->habitat }} <br> Longevità: {{ $animal->longevità }} <br>
                        <p>Regione: {{ $animal->regione }}</p></p>
                        <a href="{{ route('pages.index') }}" class="btn btn-warning">Torna all'elenco degli animali</a>
                        <a href="{{ route('pages.edit', $animal) }}" class="btn btn-success">Modifica</a>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
