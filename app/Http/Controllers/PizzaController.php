<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{

  public function index() {
    // get data from a database
    // $pizzas = [
    //   ['type' => 'hawaiian', 'base' => 'cheesy crust'],
    //   ['type' => 'volcano', 'base' => 'garlic crust'],
    //   ['type' => 'veg supreme', 'base' => 'thin & crispy']
    // ];
    // $pizzas= Pizza::all();
    // $pizzas=Pizza::orderBy('name')->get();
    // $pizzas=Pizza::orderBy('name','desc')->get();
    // $pizzas = Pizza::where('type', 'hawaiian')->get();
    $pizzas = Pizza::latest()->get();      

    return view('pizzas', [
      'pizzas' => $pizzas,
    ]);
  }

  public function show($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
  }

}