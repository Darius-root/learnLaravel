@extends('base')

@section('title', 'Tout nos bien')

@section('content')


    <div class="container">
        <div class="row mt-5">
            <div class="col-12">
                <div class="card bg-dark text-white">
                    <div class="card-body">
                        <h4 class="card-title text-warning">Intitulé du bien : <strong>{{ $property->title }}</strong></h4>
                        <p class="card-subtitle text-warning">Description du bien : {{ $property->description }}</p>
                    </div>

                    
                    <img class="card-img-top" src="{{ $property->image }}" alt="{{ $property->title }}">
                    <div class="card-body">
                        <div class="d-flex justify-content-between">
                            <p class="card-text text-success">Prix du bien :
                                <strong>{{ number_format($property->price, 0, ',', ' ') }}</strong> CFA</p>
                            <p class="card-text text-success">Lieu du bien : <strong>{{ $property->city }},
                                    {{ $property->address }}</strong></p>
                        </div>

                        <ul class="list-group list-group-flush text-warning">
                            <li class="list-group-item">Surface du bien : <strong>{{ $property->surface }}</strong> m²</li>
                            <li class="list-group-item">Nombre de chambres : <strong>{{ $property->rooms }}</strong></li>
                            <li class="list-group-item">Nombre de lits : <strong>{{ $property->bedrooms }}</strong></li>
                            <li class="list-group-item">Ville du bien : <strong>{{ $property->city }}</strong></li>
                            <li class="list-group-item">Adresse du bien : <strong>{{ $property->address }}</strong></li>
                            <li class="list-group-item">Code postal du bien : <strong>{{ $property->postal_code }}</strong>
                            </li>
                            <li class="list-group-item">Les options du bien :
                           @foreach ($property->options as $item)
                           <strong>{{ $item->name?? 'nothing' }}</strong>
                           @endforeach   </li>
                            <li class="list-group-item">Statut du bien :
                              <strong>{{ $property->sold ? 'Vendue' : 'En vente' }}</strong></li>
                        </ul>
                    </div>
                </div>
            </div>





            <div class="card mt-5 p-4">
                <h4 class="text-center mb-4">Je suis interréssé par le bien</h4>
                @if ($errors->any())
                    <div class="alert alert-danger mt-4">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form  action="{{ route('property.contact', $property) }}" method="post" >

                  @csrf
                    <div class="row">
                        @include('shared.input', [
                            'label' => 'Firstname',
                            'name' => 'firstname',
                            'class' => 'col',
                        ])
                        @include('shared.input', [
                            'label' => 'Lastname',
                            'name' => 'lastname',
                            'class' => 'col',
                        ])
                    </div>
                    <div class="row">
                        @include('shared.input', [
                            'label' => 'Phone',
                            'name' => 'phone',
                            'class' => 'col',
                            'type' => 'tel',
                        ])
                        @include('shared.input', [
                            'label' => 'Email',
                            'name' => 'email',
                            'class' => 'col',
                            'type' => 'email',
                        ])
                    </div>

                    @include('shared.input', [
                        'label' => 'Message',
                        'name' => 'message',
                        'class' => 'col',
                        'type' => 'textarea',
                    ])


                    <button class="btn btn-primary" type="submit">
{{--                         {{ $property->exists ? 'Modifier' : 'Créer' }}
 --}}         

Nous contacter </button>
                </form>
            </div>
        </div>
    </div>

    <style>
        .card {
            border-radius: 1rem;
        }

        .card-img-top {
            border-radius: 1rem 1rem 0 0;
        }
    </style>
@endsection
