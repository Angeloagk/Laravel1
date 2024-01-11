<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Competitie;
use Illuminate\Validation\Rule;

class CompetitieController extends Controller
{
    public function index()
    {
        $competities = Competitie::all();
        return view('Competities.index', compact('competities')); // Use 'competities' here
    }
    

    public function show(Competitie $competitie)
    {
        return view('Competities.show', compact('competitie'));
    }

    public function create()
    {
        return view('Competities.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'naam' => 'required|string|max:255|unique:voetbalcompetities', // Unique validation rule for 'naam'
           //validation 
            'start_datum' => 'required|date',
            'eind_datum' => 'required|date|after:start_datum', // Einddatum moet na de startdatum liggen
            'locatie' => 'required|string|max:255',
            'aantal_teams' => 'required|integer',
        ]);

    

        Competitie::create($validatedData);

        return redirect()->route('competities.index')->with('success', 'Competitie is successfully added!');
    }

    public function edit(Competitie $competitie)
    {
        return view('Competities.edit', compact('competitie'));
    }

    public function update(Request $request, Competitie $competitie)
    {
        $request->validate([
            'naam' => [
                'required',
                'string',
                'max:255',
                Rule::unique('voetbalcompetities')->ignore($competitie->id), // Unique validation rule for 'naam' while ignoring the current record
            ],
          
        ]);

        $competitie->update($request->all());

        return redirect()->route('competities.index')->with('success', 'Competitie is successfully updated!');
    }

    public function destroy(Competitie $competitie)
    {
        $competitie->delete();
        return redirect()->route('competities.index')->with('success', 'Competitie is successfully deleted!');
    }
}
