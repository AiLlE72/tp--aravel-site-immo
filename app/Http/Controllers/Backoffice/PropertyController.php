<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormAddProperty;
use App\Models\Heating;
use App\Models\Images;
use App\Models\Properties;
use App\Models\Specificities;
use Illuminate\Contracts\View\View;


class PropertyController extends Controller
{
    public function index(): View
    {
        $properties = Properties::with('specificities', 'heating')->paginate(4);
        return view('property.index', ['properties' => $properties]);
    }
    public function create(): View
    {
        $heatings = Heating::all();
        $specificities = Specificities::all();

        return view('backoffice.property.create', ['heatings' => $heatings, 'specificities' => $specificities]);
    }
    private function saveImage( Properties $property,  $image){
        $data['image-url'] = $image->store('property', 'public');
        $store = Images::create($data);
        $property->images()->sync($store);
    }
    public function store(FormAddProperty $request )
    {

        $property = Properties::create($request->validated());
        $property->specificities()->sync($request->validated('specificities'));
        $property->heating()->sync($request->validated('heating'));


        $image1 = $request->validated('image1');
        $this->saveImage($property, $image1);
        // $image2 = $request->validated('image2');
        // $this->saveImage($property, $image2);
        // $image3 = $request->validated('image3');
        // $this->saveImage($property, $image3);
        dd(('stop'));

        return redirect()->route('properties-index')->with('success', "L'article a bien été sauvegardé");
    }
}
