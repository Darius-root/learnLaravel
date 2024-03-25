<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PropertyFormResquest;
use App\Models\Option;
use App\Models\Property;


use function PHPUnit\Framework\returnSelf;

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
        return view('admin.properties.form', ['property' =>  new Property(), 'options'=> Option::pluck('name','id')]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PropertyFormResquest $request)
    {
        $validatedData = $request->validated();

        // Créer une nouvelle instance de la propriété avec les données validées
        $property = Property::create($validatedData);
        $property->options()->sync($request->validated('options'));

        // Redirection vers l'index des propriétés avec un message de succès
        return to_route('admin.property.index' )->with('success', 'La propriété a bien été enregistrée');
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
    public function edit(Property $property)
    {
        return view ('admin.properties.form',['property' => $property, 'options'=> Option::pluck('name','id')]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PropertyFormResquest $request, Property $property)
    {
        $validatedData=$request->validated();
      
        // Synchroniser les options de la propriété avec les options sélectionnées dans le formulaire.
        // Cette ligne de commande permet de mettre à jour la relation belongtomany 'options' en utilisant les ID des options sélectionnées dans le formulaire.
        // Les options non sélectionnées seront supprimées de la relation, les options sélectionnées seront ajoutées ou mises à jour dans la relation.
        $property->options()->sync($request->validated('options'));
        $property->update($validatedData);

        return to_route('admin.property.index' )->with('success', 'La propriété a bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Property $property)
    {

        $property->delete();
        return to_route('admin.property.index' )->with('success', 'La propriété a bien été supprimée');
    }
}
