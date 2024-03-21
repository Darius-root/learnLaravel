@php
   $label ??= null; 
   $type ??='text'; 
   $class ??=null;
   $name ??='' ;
   $value ??='' ;
@endphp
<label for="{{$name}}" class="form-check-label">{{$label}} </label>

<!-- Le bloc de code suivant définit une balise DIV qui aura une classe "mb-3" s'il y a une valeur dans la variable "$class". Le contenu de cette balise DIV sera la suivante : -->
<div @class(["mb-3 form-check form-switch", $class])>
    <input @checked(old($name, $value ?? false)) type="hidden" name="{{$name}}" value="0">
<input type="checkbox" name="{{$name}}" value="1" class="form-check-input @error($name) is-invalid @enderror"  role="switch" id="{{$name}}">  
    @error($name)
<div class="invalid-feedback">
    {{$message}}
</div> 
  @enderror
</div>
