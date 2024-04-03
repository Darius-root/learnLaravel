@extends('base')

@section('content')
<div class="container">


    <h1>Nos derniers biens</h1>


    <div class="row ">

        @foreach ($properties as $item)
            
        <div class="col mt-5">

            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{$item->title}}</h4>
                <h6 class="card-subtitle text-muted">{{$item->title}}</h6>

              </div>
              @if ($item->image)
              
        
              <img src="{{$item->imageurl()}}" class="card-img-top" alt="" style="width: 100%; height: 25vh; object-fit: cover;">
    
              @endif              <div class="card-body">
              
                <a href="#" class="card-link">{{$item->surface}} m2</a>
                <a href="#" class="card-link">{{$item->city}}</a>
                <div class="d-flex  justify-content-between mt-4 "> <p class="card-text"> {{number_format($item->price,thousands_separator:'')}} CFA
                </p>
                <a href="{{route('property.show',['slug'=>$item->getSlug(), 'property'=>$item])}}" class="card-link">Voir</a>
            </div> 
              </div>
              
            </div>

        </div>


        @endforeach

    </div>
</div>
@endsection