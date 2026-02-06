<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LandingRequest;
use App\Models\Landing;
use App\Models\Campaign;

class LandingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $landings = Landing::with('campaign')->get();
        return view('admin.landings.index', compact('landings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.landings.create', [
            'campaigns' => Campaign::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LandingRequest $request)
    {
        Landing::create($request->validated());

        return redirect()->route('landings.index')->with('success', 'Landing page created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
            return view('admin.landings.show', [
                'landing' => Landing::findOrFail($id),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.landings.edit', [
            'landing' => Landing::findOrFail($id),
            'campaigns' => Campaign::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LandingRequest $request, Landing $landing)
    {
        $landing->update($request->validated());

        return redirect()->route('landings.index')->with('success', 'Landing page updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Landing $landing)
    {
        $landing->delete();

        return redirect()->route('landings.index')->with('success', 'Landing page deleted successfully.');
    }
}
