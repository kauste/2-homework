@extends('layouts.app')

@section('content')
<form class="create-form" action="{{route('animalsCreate')}}" method="post">
    <div>
        <label class="create-label" for="animal_choice">Koks tai gyvis?</label>
        <input class="create-input" type="text" id="animal_choice" name="animal_choice" />
    </div>
    <div>
        <label class="create-label" for="animal_color">Suteikite jam spalva</label>
        <select id="animal_color" name="animal_color" class="animal_color">
            @forelse($colors as $color)
            <option style="background:{{$color->color}}" value="{{$color->id}}">{{$color->title}}</option>
            @empty
            <option background="blue" value="blue"></option>
            @endforelse
        </select>
    </div>
    @csrf
    <button class="create-btn" type="submit">Choose</button>
</form>
@endsection
