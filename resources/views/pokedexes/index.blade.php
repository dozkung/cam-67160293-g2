@extends('template.default')

@section('content')
<div class="container mt-4">

    <h1 class="mb-4">Pokedex Create</h1>

    <form action="{{ url('/pokedexes') }}" method="post">
    @csrf

    <div class="row mb-3">
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" id="name" name="name">
        </div>
    </div>

    <div class="row mb-3">
        <label for="type" class="col-sm-3 col-form-label">Type</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" id="type" name="type">
        </div>
    </div>

    <div class="row mb-3">
        <label for="species" class="col-sm-3 col-form-label">Species</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" id="species" name="species">
        </div>
    </div>

    <div class="row mb-3">
        <label for="height" class="col-sm-3 col-form-label">Height</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" id="height" name="height">
        </div>
    </div>

    <div class="row mb-3">
        <label for="weight" class="col-sm-3 col-form-label">Weight</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" id="weight" name="weight">
        </div>
    </div>

    <div class="row mb-3">
        <label for="hp" class="col-sm-3 col-form-label">HP</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" id="hp" name="hp">
        </div>
    </div>

    <div class="row mb-3">
        <label for="attack" class="col-sm-3 col-form-label">Attack</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" id="attack" name="attack">
        </div>
    </div>

    <div class="row mb-3">
        <label for="defense" class="col-sm-3 col-form-label">Defense</label>
        <div class="col-sm-9">
            <input class="form-control" type="number" id="defense" name="defense">
        </div>
    </div>

    <div class="row mb-3">
        <label for="image_url" class="col-sm-3 col-form-label">Image URL</label>
        <div class="col-sm-9">
            <input class="form-control" type="text" id="image_url" name="image_url">
        </div>
    </div>

    <button type="submit" class="btn btn-primary">บันทึก</button>
</form>

    @include('pokedexes.table')
@endsection
