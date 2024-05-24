<?php

namespace App\Http\Controllers\backoffice;

use App\Http\Controllers\Controller;
use App\Http\Requests\FormAddHeating;
use App\Models\Heating;
use Illuminate\Contracts\View\View;


class HeatingController extends Controller
{
    public function index(): View
    {
        $heatings = Heating::paginate(10);

        return view('backoffice.heating.index', ['heatings' => $heatings]);
    }
    public function create(FormAddHeating $request)
    {
        Heating::create($request->validated());

        return to_route("heating-index");
    }
    public function update(Heating $heating, FormAddHeating $request)
    {
        $heating->update($request->validated());

        return to_route("heating-index");
    }
    public function delete(Heating $heating)
    {
        $heating->delete();

        return to_route("heating-index");
    }
}
