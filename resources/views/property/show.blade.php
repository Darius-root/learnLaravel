@extends('base')

@section('title','Tout nos bien')

@section('content')


 <div class="container"> <div class="row ">
        
    <div class="mt-5">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{$property->title}}</h4>
            <h6 class="card-subtitle text-muted">{{$property->title}}</h6>

          </div>
          <img src="holder.js/100x180/" alt="">
          <div class="card-body">
          
            <a href="#" class="card-link">{{$property->surface}} m2</a>
            <a href="#" class="card-link">{{$property->city}}</a>
            <div class="d-flex  justify-content-between mt-4 "> <p class="card-text"> {{number_format($property->price,thousands_separator:'')}} CFA
            </p>
        </div> 

        {{$property}}
          </div>
          
        </div>

    </div>

 

</div>

</div>
@endsection