<?php

namespace App\Http\Controllers;

use App\Events\ContactRequestEvent;
use App\Http\Requests\PropertyContactRequest;
use App\Http\Requests\SearchPropertiesRequest;
use App\Mail\PropertyContactMail;
use App\Models\Property;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        return view('property.index',['properties'=> $query->paginate('5'),'input'=>$request->validated()]);
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


  /*   public function contact(Property $property , PropertyContactRequest $request)
    {
        Mail::send(new PropertyContactMail($property, $request->validated())); 
        return back()->with('success', 'Thanks for contacting us!');
    } */
    public function contact(Property $property , PropertyContactRequest $request)
    {
        //Evenement  d'envoi d'email   

        //je met en place un ecouteur d'evenement et un listener je les associe dans le fichier  EventServiceProvider
       
       
        event(new ContactRequestEvent($property, $request->validated()));

        return back()->with('success', 'Thanks for contacting us!');



      
    }
}
