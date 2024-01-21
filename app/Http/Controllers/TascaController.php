<?php

namespace App\Http\Controllers;

use App\Models\Tasca;
use Illuminate\Http\Request;
use App\Models\Projecte;

class TascaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Tasca::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Projecte $projecte)
    {
        return view('tasca_create', compact('projecte'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Projecte $projecte)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'completed' => 'required|boolean',
            'description' => 'required',
        ]);

        $tasca = new Tasca([
            'name' => $request->name,
            'slug' => $request->slug,
            'completed' => $request->completed,
            'description' => $request->description,
            'projecte_id' => $projecte->id,
        ]);

        $tasca->save();

        return redirect()->route('projecte.index')->with('success', 'Tasc created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projecte $projecte, Tasca $tasca)
    {
        return view('tasca_show', compact('tasca'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projecte $projecte, Tasca $tasca)
    {
        return view('tasca_edit', compact('projecte', 'tasca'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projecte $projecte, Tasca $tasca)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'completed' => 'required|boolean',
            'description' => 'required',
        ]);

        $tasca->update($request->all());

        return redirect()->route('projecte.index')->with('success', 'Tasc updated successfully');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projecte $projecte, Tasca $tasca)
    {
        $tasca->delete();
        return redirect()->back()->with('success', 'Tasc deleted successfully');
    }
}
