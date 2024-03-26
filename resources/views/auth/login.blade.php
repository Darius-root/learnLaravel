@extends('auth.layaout')



@section('content')
    <form class="forms-sample" action="{{route('doLogin')}}" method="POST">
        @csrf
        <div class="mb-3">

            @include('shared.input', [
                'name' => 'email',
                'label' => 'Email',
                'class' => 'form-control',
                'value' => old('email') ?? '',
                'type' => 'email',
                'placeholder' => 'Email',
            ])</div>
<div class="mb3">
            @include('shared.input', [
                'name' => 'password',
                'label' => 'Mot de passe',
                'class' => 'form-control',
                'value' => '',
                'type' => 'password',
                'placeholder' => 'Mot de passe',
            ])
            
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="authCheck">
            <label class="form-check-label" for="authCheck">
                Remember me
            </label>
        </div>
        <div>
            <button type="SUBMIT" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
               LOGIN
            </button>
        </div>
        <a href="register.html" class="d-block mt-3 text-muted">Not a user? Sign up</a>
    </form>
@endsection
