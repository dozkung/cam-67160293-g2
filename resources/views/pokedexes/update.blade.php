@extends('template.default')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Pokedex Update</h1>

    <form action="{{ url('/pokedexes/'.$pokedex_update->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row mb-3">
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="name" name="name"
                   value="{{ $pokedex_update->name }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="type" class="col-sm-3 col-form-label">Type</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="type" name="type"
                   value="{{ $pokedex_update->type }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="species" class="col-sm-3 col-form-label">Species</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="species" name="species"
                   value="{{ $pokedex_update->species }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="height" class="col-sm-3 col-form-label">Height</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="height" name="height"
                   value="{{ $pokedex_update->height }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="weight" class="col-sm-3 col-form-label">Weight</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="weight" name="weight"
                   value="{{ $pokedex_update->weight }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="hp" class="col-sm-3 col-form-label">HP</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="hp" name="hp"
                   value="{{ $pokedex_update->hp }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="attack" class="col-sm-3 col-form-label">Attack</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="attack" name="attack"
                   value="{{ $pokedex_update->attack }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="defense" class="col-sm-3 col-form-label">Defense</label>
        <div class="col-sm-9">
            <input type="number" class="form-control" id="defense" name="defense"
                   value="{{ $pokedex_update->defense }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="image_url" class="col-sm-3 col-form-label">Image URL</label>
        <div class="col-sm-9">
            <input type="text" class="form-control" id="image_url" name="image_url"
                   value="{{ $pokedex_update->image_url }}">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">บันทึก</button>
</form>


    @include('pokedexes.table')
@endsection
