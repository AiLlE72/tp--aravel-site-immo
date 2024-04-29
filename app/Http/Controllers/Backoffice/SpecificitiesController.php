<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormAddSpecificities;
use App\Models\Specificities;
use Illuminate\Contracts\View\View;


class SpecificitiesController extends Controller
{
    public function index(): View
    {
        $specificities = Specificities::paginate(3);
        return view('backoffice.specificities.index', ['specificities' => $specificities]);
    }
    public function create(FormAddSpecificities $request)
    {
        Specificities::create($request->validated());

        return to_route("specificities-index");
    }
    public function update(Specificities $specificities, FormAddSpecificities $request)
    {
        $specificities->update($request->validated());

        return to_route("specificities-index");
    }
    public function delete(Specificities $specificity)
    {
        $specificity->delete();

        return to_route("specificities-index");
    }
}
