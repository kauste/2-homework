@extends('layouts.app')
@section('content')
<form class="create-form" action="{{route('colorsUpdate', $color)}}" method="post">
    <div>
        <label class="create-label" for="color_choice">Pakeiskite spalvą</label>
        <input class="create-input" type="color" id="color_choice" name="color_choice" value="{{$color->color}}">
    </div>
    <div>
        <label class="create-label" for="color_name">Pakeiskite jai pavadinimą</label>
        <input class="create-input" type="text" id="color_name" name="color_name" value="{{$color->title}}" />
    </div>
    @csrf
    @method('put')
    <button class="create-btn" type="submit">Decided</button>
</form>
@endsection
