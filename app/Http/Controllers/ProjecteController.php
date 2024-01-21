<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projecte;
use App\Models\Tasca;


class ProjecteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projectes = Projecte::with('tasca')->get();
        return view('projectes_index',['projectes' => $projectes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('projecte_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $projecte = new Projecte();
        $projecte->name = $request->name;
        $projecte->slug = $request->slug;
        $projecte->save();

        return redirect()->route('projecte.index')->with('success', 'Projecte created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Projecte $projecte)
    {
        return view('projecte_show', compact('projecte'));
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Projecte $projecte)
    {
        return view('projecte_edit', compact('projecte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Projecte $projecte)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
        ]);

        $projecte->update($request->all());

        return redirect()->route('projecte.index')->with('success', 'Projecte updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Projecte $projecte)
    {
        $projecte->delete();

        return redirect()->route('projecte.index')->with('success', 'Projecte deleted successfully');
    }
}
