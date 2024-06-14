<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormAddProperty;
use App\Http\Requests\formFilter;
use App\Models\Heating;
use App\Models\Images;
use App\Models\Properties;
use App\Models\Specificities;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Request;

class PropertyController extends Controller
{
    public function index(): View
    {
        $properties = Properties::with('specificities', 'heating', 'images')->paginate(4);

        return view('property.index', ['properties' => $properties]);
    }

    public function single(Properties $property)
    {
        $property = Properties::with('specificities', 'heating', 'images')->get();
        return view('property.single', ['property' => $property]);
    }

    public function list(): View
    {
        $properties = Properties::with('specificities', 'heating', 'images')->paginate(4);

        return view('backoffice.property.index', ['properties' => $properties]);
    }


    public function form(): View
    {
        $heatings = Heating::all();
        $specificities = Specificities::all();

        return view('backoffice.property.form', ['heatings' => $heatings, 'specificities' => $specificities]);
    }


    private function saveImage(Properties $property,  $image)
    {
        $data['imageUrl'] = $image->store('property', 'public');
        $store = Images::create($data);
        $property->images()->attach($store);
    }


    public function create(FormAddProperty $request)
    {
        $property = Properties::create($request->validated());
        $property->specificities()->sync($request->validated('specificities'));
        $property->heating()->sync($request->validated('heating'));

        $image1 = $request->validated('image1');
        $this->saveImage($property, $image1);
        $image2 = $request->validated('image2');
        $this->saveImage($property, $image2);
        $image3 = $request->validated('image3');
        $this->saveImage($property, $image3);

        return redirect()->route('properties-index')->with('success', "L'article a bien été sauvegardé");
    }

    public function edit(Properties $property): View
    {
        $heatings = Heating::all();
        $specificities = Specificities::all();

        return view('backoffice.property.form', compact('heatings', 'specificities', 'property'));
    }

    public function update(Properties $property, FormAddProperty $request)
    {
        $property->update($request->validated());
        $property->specificities()->sync($request->validated('specificities'));
        $property->heating()->sync($request->validated('heating'));



        return redirect()->route('properties-index')->with('success', "L'article a bien été modifié");
    }

    public function delete(Properties $property)
    {
        $images = $property->images()->get();
        foreach ($images as $image) {
            $image->delete();
            Storage::disk('public')->delete($image->imageUrl);
        }
        $property->delete();

        return to_route("backoffice-properties-index");
    }

    public function search(formFilter $request){

        dd($request->validated());

        $properties = Properties::with('specificities', 'heating', 'images')->where('price', ">=", $request->validated('minPrice') )->paginate(4);
         return view('property.index', ['properties' => $properties]);
    }
}
