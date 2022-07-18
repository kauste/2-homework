@extends('layouts.app')

@section('content')
<form class="create-form" action="{{route('colorsStore')}}" method="post">
    <div>
        <label class="create-label" for="color_choice">Išsirinkite spalvą</label>
        <input class="create-input" type="color" id="color_choice" name="color_choice" />
    </div>
    <div>
        <label class="create-label" for="color_name">Suteikite jai pavadinimą</label>
        <input class="create-input" type="text" id="color_name" name="color_name" />
    </div>
    @csrf
    <button class="create-btn" type="submit">Choose</button>
</form>
@endsection
