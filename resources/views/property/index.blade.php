@extends('base')

@section('title','Tout nos bien')

@section('content')

<div class="bg-light p-1 mb-3px pb-3 text-center">
    
    <form action="" method="get" class="container d-flex gap-2">
<input type="number" placeholder="Max price you want ??" class="form-control" name="price" value="{{$input['price']?? ''}}">
<button class="btn btn-outline-success" type="submit">Search</button>

    </form>
</div>
 <div class="container"> <div class="row ">
    @forelse ($properties as $item)
        
    <div class="col-5 mt-5">

        <div class="card">
          <div class="card-body">
            <h4 class="card-title">{{$item->title}}</h4>
            <h6 class="card-subtitle text-muted">{{$item->title}}</h6>

          </div>
          <img src="holder.js/100x180/" alt="">
          <div class="card-body">
          
            <a href="#" class="card-link">{{$item->surface}} m2</a>
            <a href="#" class="card-link">{{$item->city}}</a>
            <div class="d-flex  justify-content-between mt-4 "> <p class="card-text"> {{number_format($item->price,thousands_separator:'')}} CFA
            </p>
            <a href="{{route('property.show',['slug'=>$item->getSlug(), 'property'=>$item])}}" class="card-link">Voir</a>
        </div> 
          </div>
          
        </div>

    </div>
@empty
    <div class="col-3 m-3"> Aucun resultat n'a été trouvé</div>
 
    @endforelse

</div>
<div class="m-4">
    {{$properties->links()}}


</div>
</div>
@endsection