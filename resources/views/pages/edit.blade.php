@extends('app')
@section('main-section')
    <div class="container ">
        <div class="row justify-content-center">
            <h1 class="text-center">
                Edit {{ $animal->nome }}
            </h1>
        </div>
        <div class="col-6 ">
            <form action="{{ route ('pages.update', $animal) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal name" aria-label="Animal name" id="name" name="name" value="{{ $animal->nome }}">
                </div>

                <div class="mb-3">
                    <label for="AnimalId">Animal id</label>
                    <input class="form-control form-control-sm mb-2" type="number" placeholder="Animal id" aria-label="id " id="id" name="id" value="{{ $animal->id }}">
                </div>

                <div class="mb-3">
                    <label for="AnimalSpecie">Animal Specie</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal specie" aria-label="Animal Specie" id="specie" name="specie" value="{{ $animal->specie }}">
                </div>

                <div class="mb-3">
                    <label for="AnimalHabitat">Animal Habitat</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal habitat" aria-label="Animal Habitat" id="habitat" name="habitat" value="{{ $animal->habitat }}">
                </div>

                <div class="mb-3">
                    <label for="AnimalLongevità">Animal Longevità</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal longevità" aria-label="Animal Longevità" id="longevità" name="longevità" value="{{ $animal->longevità }}">
                </div>

                <div class="mb-3">
                    <label for="Animal rischio_estinzione">Rischio di Estinzione</label>
                    <input class="form-control form-control-sm mb-2" type="number" placeholder="Animal rischio estinzione" aria-label="rischio_estinzione" id="rischio_estinzione" name="rischio_estinzione"  value="{{ $animal->rischio_estinzione }}">
                </div>

                <div class="mb-3">
                    <label for="Animal alimentazione">alimentazione</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal alimentazione" aria-label="Animal alimentazione" id="alimentazione" name="alimentazione" value="{{ $animal->alimentazione }}">
                </div>

                <div class="mb-3">
                    <label for="Animal regione">regione</label>
                    <input class="form-control form-control-sm mb-2" type="text" placeholder="Animal regione" aria-label="Animal regione" id="regione" name="regione" value="{{ $animal->regione }}">
                </div>

                <div class="mb-3 d-flex justify-content-between py-2 ">
                    <input type="reset" value="Reset fields" class="btn btn-danger">
                    <input type="submit" value="Update {{ $animal->nome }}" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
@endsection