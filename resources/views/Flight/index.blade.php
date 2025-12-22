@extends('template.default')
@section('header1', 'Flightdata')
@section('content')
<h1>{{ $flights }}</h1>
    <div>
        <div>
            <form>
                @csrf
                <div class="mb-3">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" id="name" name="name">
                </div>
                <div>
                    <label for="airline">Airline</label>
                    <input class="form-control" type="text" id="airline" name="airline">
                </div>
                <div>
                    <label for="number_of_planes">Number of Planes</label>
                    <input class="form-control" type="text" id="number_of_planes" name="number_of_planes">
                </div>
                <div>
                    <label for="price_per_ticket">Price per Ticket</label>
                    <input class="form-control" type="text" id="price_per_ticket" name="price_per_ticket">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
