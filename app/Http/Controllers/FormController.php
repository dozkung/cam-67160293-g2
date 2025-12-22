<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function result(Request $request)
    {
        $request->validate([
            'first_name'     => 'required|string|max:100',
            'last_name'      => 'required|string|max:100',
            'age'            => 'required|integer|min:1',
            'birthday'       => 'required|date',
            'gender'         => 'required',
            'address'        => 'required|string',
            'favorite_color' => 'required|string',
            'music'          => 'required',
            'agree'          => 'required'
        ]);

        return view('form-result', [
            'first_name'     => $request->first_name,
            'last_name'      => $request->last_name,
            'age'            => $request->age,
            'birthday'       => $request->birthday,
            'gender'         => $request->gender,
            'address'        => $request->address,
            'favorite_color' => $request->favorite_color,
            'music'          => $request->music
        ]);

        dd($request->all());
    }
}
