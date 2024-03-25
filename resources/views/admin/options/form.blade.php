@extends('admin.admin')

@section('title', $option->exists ? 'Modifier une option ' : 'Créer une option ')

@section('content')



    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> @yield('title')
            </h4>

            <form action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store', $option) }}"
                method="POST" enctype="multipart/form-data" id="signupForm" novalidate="novalidate">
                @csrf
                @method($option->exists ? 'PUT' : 'POST')

                <div class="row ">
                    <div class="col"> @include('shared.input', [
                        'label' => 'Name',
                        'name' => 'name',
                        'value' => $option->name,
                    ])  
                </div>
               


                <button class="btn btn-primary">
                    {{ $option->exists ? 'Modifier' : 'Créer' }}
                </button>
            </form>
        </div>
    </div>
@endsection
