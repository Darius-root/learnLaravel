@extends('admin.admin')

@section('title', $property->exists ? 'Modifier un bien ' : 'Créer un bien ')

@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> @yield('title')
            </h4>

            <form action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store', $property) }}"
                method="POST" enctype="multipart/form-data" id="signupForm" novalidate="novalidate">
                @csrf
                @method($property->exists ? 'PUT' : 'POST')

                <div class="row ">
                    <div class="col"> @include('shared.input', [
                        'label' => 'Title',
                        'name' => 'title',
                        'value' => $property->title,
                    ])</div>
                     <div class="col"> @include('shared.input', [
                        'label' => 'Surface',
                        'name' => 'surface',
                        'type' => 'number',
                        'value' => $property->surface,
                    ])</div>
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'Price',
                            'name' => 'price',
                            'type' => 'number',
                            'value' => $property->price,
                        ])
                    </div>
                   
                </div>
               


              

                <div class="row ">
                    <div class="col">
                        @include(
                            'shared.input',
                            ['label' => 'City', 'name' => 'city'],
                            ['value' => $property->city]
                        )</div>
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'Bedrooms',
                            'name' => 'bedrooms',
                            'type' => 'number',
                            'value' => $property->bedrooms,
                        ])
                    </div>
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'floor',
                            'name' => 'floor',
                            'type' => 'number',
                            'value' => $property->floor,
                        ])</div>
                </div>



                <div class="row ">
                   
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'address',
                            'name' => 'address',
                            'value' => $property->address,
                        ])
                    </div>
                </div>


                <div class="row ">

                    <div class="col">
                        @include('shared.input', [
                            'label' => 'postal_code',
                            'name' => 'postal_code',
                            'value' => $property->postal_code,
                        ])
                    </div>
                    
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'rooms',
                            'name' => 'rooms',
                            'type'=> 'number',
                            'value' => $property->rooms,
                        ])
                    </div>
                    <div class="col">
                        @include('shared.input', [
                            'label' => 'Description',
                            'name' => 'description',
                            'value' => $property->description,
                            'type' => 'textarea',
                        ])
                    </div>
                   
                </div>
                <div class="col">
                    @include(
                        'shared.checkbox',
                        ['label' => 'sold', 'name' => 'sold',
],
                        ['value' => $property->sold]
                    )</div>

                <button class="btn btn-primary">
                    {{ $property->exists ? 'Modifier' : 'Créer' }}
                </button>
            </form>
        </div>
    </div>
@endsection
