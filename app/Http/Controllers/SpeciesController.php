<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpeciesStoreRequest;
use Illuminate\Http\Request;
use App\Models\Species;


class SpeciesController extends Controller
{
    public function index()
    {
        $species = Species::all();

        return view('species.index')->with(['species'=>$species]);
    }
    public function store(SpeciesStoreRequest $request)
    {
        $species = Species::updateOrCreate($request->validated());
        if(!empty($species)){
            return redirect()->back();
        }
    }
    public function show(Species $species)
    {
        return view('species.edit')->with(['species'=>$species]);
    }

    public function update(SpeciesStoreRequest $request,Species $species)
    {
        $species->name = $request->name;
        $species->qty_no = $request->qty_no;
        $species->qty_weight = $request->qty_weight;
        $species->price = $request->price;
        $species->price_all = $request->price_all;
        $species->save();
        return redirect(route('species.index'));
    }
}
