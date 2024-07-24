@extends('app')
@section('main-section')
<div>
<h1>Animals</h1>
    @foreach ($animals as $animal)
    <section class=" text-center px-3">
            <div class="card col-4 mb-3 d-flex">
                <h1 class="card-header">{{ $animal->nome }}</h1>
                <div class="card-body">
                    <h5 class="card-title">Specie: {{ $animal->specie }}</h5>
                    <p class="card-text">Habitat: {{ $animal->habitat }} <br> Longevità: {{ $animal->longevità }} <br>
                    <p>Regione: {{ $animal->regione }}</p></p>
                    <a href="{{ route('pages.show', $animal) }}" class="btn btn-primary">Animal detail</a>
                </div>
            </div>
        </section>
    @endforeach
</div>
@endsection