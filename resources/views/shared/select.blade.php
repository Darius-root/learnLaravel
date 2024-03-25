@php

    $class ??= null;
    $name ??= '';
    $label ??= udfirst($name);

    $options ??= [];
@endphp


<label for="{{ $name }}" class="form-label">{{ $label }}</label>
<select name="{{ $name }}[]" id="{{ $name }}" class="js-example-basic-multiple form-select"
    multiple="multiple" data-width="100%">
    @foreach ($options as $key => $data)
        <option @selected($value->contains($key)) value="{{ $key }}">{{ $data }} </option>
    @endforeach
</select>
@error($name)
    <div class="invalid-feedback">
        {{ $message }}
    </div>
@enderror
