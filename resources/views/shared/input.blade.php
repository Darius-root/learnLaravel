@php
   $label ??= null; 
   $type ??='text'; 
   $class ??=null;
   $name ??='' ;
   $value ??='' ;
@endphp

<!-- Le bloc de code suivant définit une balise DIV qui aura une classe "mb-3" s'il y a une valeur dans la variable "$class". Le contenu de cette balise DIV sera la suivante : -->
<div @class(["mb-3", $class])>

  
    <!-- Balise LABEL qui affiche le contenu de la variable "$label" et qui est liée à l'élément INPUT via l'attribut "for" où la valeur est "$name". -->
    <label for="{{$name}}" class="form-label">{{$label}} </label>
  @if($type=='textarea')

<textarea id="" class="form-control  @error($name) is-invalid @enderror"  name="{{$name}}" type="{{$type}}" maxlength="100" rows="5"  name="{{$name}}" type="{{$type}}" placeholder="Description"> {{old($name, $value)}}</textarea>
@else  <!-- Balise INPUT de type "text" qui a une classe "form-control" et qui a un nom "$name". Sa valeur est définie par la fonction "old" qui tente de récupérer la valeur de "$name" dans les données soumises ou la valeur de "$value" s'il n'y a pas de donnée soumise. -->
    <input id="{{$name}}" class="form-control   @error($name) is-invalid @enderror" name="{{$name}}" type="{{$type}}" value="{{old($name, $value)}}" >
@endif
    @error($name)
<div class="invalid-feedback">
    {{$message}}
</div> 
  @enderror
</div>
