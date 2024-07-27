<?php
namespace App\Http\Controllers;
use App\Models\Animal;
use Illuminate\Http\Request;
class AnimalController extends Controller
{
    public function index()
    {
        $animals = Animal::all();
        return view('pages.index',compact('animals'));
    }
    public function create()
    {
        return view('pages.create');
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $newAnimal = new Animal($data);
        $newAnimal->id = $data['id'];
        $newAnimal->nome = $data['name'];
        $newAnimal->specie = $data['specie'];
        $newAnimal->habitat = $data['habitat'];
        $newAnimal->longevità = $data['longevità'];
        $newAnimal->rischio_estinzione = $data['rischio_estinzione'];
        $newAnimal->alimentazione = $data['alimentazione'];
        $newAnimal->regione = $data['regione'];
        $newAnimal->save();
        return redirect()->route('pages.show',$newAnimal);
    }
    public function show(Animal $animal)
    {
        return view('pages.show',compact('animal'));
    }
    public function edit(Animal $animal)
    {
        return view('pages.edit', compact('animal'));
    }
    public function edit(Animal $animal)
    public function update(Request $request, Animal $animal)
    {
        $data = $request->all();
        $animal->id = $data['id'];
        $animal->nome = $data['name'];
        $animal->specie = $data['specie'];
        $animal->habitat = $data['habitat'];
        $animal->longevità = $data['longevità'];
        $animal->rischio_estinzione = $data['rischio_estinzione'];
        $animal->alimentazione = $data['alimentazione'];
        $animal->regione = $data['regione'];
        $animal->update();
        return redirect()->route('pages.show',$animal);
    }
    public function destroy(Animal $animal)
    {
        $animal->delete();
        return redirect()-> route('pages.index');
    }
}