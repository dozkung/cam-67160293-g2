<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FilghtController extends Controller
{
    //
    private function insert_db(){
        $flight = new Flight();
        $flight->name = "Test InsertFlight";
        $flight->airline = "TestAirline";
        $flight->number_of_planes = 5;
        $flight->price_per_ticket = 50.00;
        $flight->save();

        print_r(Flight::all());
    }
    private function update_db(){
        $flight = Flight::find(1);
        $flight->name = "Test update Flight";
        $flight->save();
    }
    private function delete_db(){
        $flight = Flight::find(1);
        $flight->delete();
    }
    function index(){
       $data['flights'] = Flight::all();
       return view('flights.index', $data);
    }

    function store(Request $req){
        $flight = new Flight();
        $flight->name = $req->input('name');
        $flight->airline = $req->input('airline');
        $flight->number_of_planes = $req->input('number_of_planes');
        $flight->price_per_ticket = $req->input('price_per_ticket');
        $flight->save();

        return $this->index();
    }


}
