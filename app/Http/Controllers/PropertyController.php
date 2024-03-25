<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchPropertiesRequest;
use App\Models\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SearchPropertiesRequest $request)
    {

        $query=Property::query();
        //$request->has('price')
        if ($price=$request->validated('price')) {
           $query=$query->where("price",'<=',$price);
        }
/*          dd($query);
 */        return view('property.index',['properties'=> $query->paginate('5'),'input'=>$request->validated()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug, Property $property)
    {


        $eSlug=$property->getSlug();
        if ($slug!==$eSlug) {
            return to_route('property.show',['slug'=>$eSlug, 'property'=>$property]);
        }
        return view('property.show', ['property'=>$property]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
