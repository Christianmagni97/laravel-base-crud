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
    }
    public function show(Animal $animal)
    {
        return view('pages.show',compact('animal'));
    }

    public function edit(Animal $animal)
    {
    }
    public function update(Request $request, Animal $animal)
    {
    }

    public function destroy(Animal $animal)
    {
    }
}