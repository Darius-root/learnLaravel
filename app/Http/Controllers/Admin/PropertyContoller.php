<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormResquest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retourne la vue 'admin.properties.index' en lui passant une collection de propriétés triées par 'created_at' en ordre décroissant, paginées à 10 éléments par page.
        return view ('admin.properties.index', ['properties'=>Property::orderBy('created_at', 'desc')->paginate(10)]);

    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Retourne la vue 'admin.properties.form' en lui passant une nouvelle instance de la classe Property.
        return view('admin.properties.form', ['property' =>  new Property()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormResquest $request)
    {
        $validatedData = $request->validated();
    
        // Créer une nouvelle instance de la propriété avec les données validées
        $property = Property::create($validatedData);
/*         sweetalert()->addWarning('save with success.');
 */
        // Redirection vers l'index des propriétés avec un message de succès
        return redirect()->route('admin.property.index' )->with('success', 'La propriété a bien été enregistrée');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view ('admin.properties.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
