<?php

namespace App\Http\Controllers;

use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;

class HouseController extends Controller
{



    public function list()
    {
        $houses = House::query()->with("user")->get();

        return view("houses.list", ["houses" => $houses]);
    }

    public function createForm()
    {
        $users = User::query()->get();
        //mindne user-t lekérünk

        return view("houses.create", [
            "users" => $users
        ]); 

    }

    public function updateForm(House $house)
    {

    }




    //eza  függvány van ahhoz hogy a createformon létrehozunk valamit akkor bekerül a db-be
    public function store(Request $request)
    {
        $house = House::create($request->except("_token"));

        //amennyiben jó akkor vissza irányitjuk a list-re
        return redirect()->route("houses.list");
    }

    public function update(House $house, Request $request)
    {

    }

    public function delete(House $house)
    {

    }
}
