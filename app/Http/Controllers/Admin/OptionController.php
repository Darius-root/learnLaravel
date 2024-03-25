<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionFormRequest;
use App\Models\Option;


class OptionController extends Controller
{
    
    public function index()
    {
        return view ('admin.options.index', ['options'=>Option::paginate(20)]);

    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.options.form', ['option' =>  new Option()]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OptionFormRequest $request)
    {
        $validatedData = $request->validated();
    
        $Option = Option::create($validatedData);
      
        return to_route('admin.option.index' )->with('success', 'L\'option a bien été enregistrée');
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
    public function edit(Option $Option)
    {
        return view ('admin.options.form',['option' => $Option]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OptionFormRequest $request, Option $Option)
    {
    
        $validatedData=$request->validated();
        $Option->update($validatedData);

        return to_route('admin.option.index' )->with('success', 'L\'option a bien été mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Option $Option)
    {

        $Option->delete();
        return to_route('admin.option.index' )->with('success', 'L\'option a bien été supprimée');
    }
}
