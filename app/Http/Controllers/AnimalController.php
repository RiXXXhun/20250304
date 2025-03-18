<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function list()
    {
        $animals = Animal::query()
            ->get();

        return view("animals.list", [
            "animals" => $animals
        ]);
    }

    public function createForm()
    {
        return view("animals.create");
    }

    public function updateForm(Animal $animal)
    {
        return view("animals.update", [
            "animal" => $animal
        ]);
    }

    public function store(Request $request)
    {
        $animal = Animal::firstOrNew([
            "id" => $request->get("id")
        ]);
        $animal->fill($request->except(["id", "_token"]));
        $animal->save();

        return redirect()->route("animals.list");
    }

    public function update(Animal $animal, Request $request)
    {

    }

    public function delete(Animal $animal)
    {
        $animal->delete();

        return redirect()->route("animals.list");
    }
}