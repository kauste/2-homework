@extends('layouts.app')
@section('content')
<form class="create-form" action="{{route('animalsUpdate', $animal)}}" method="post">
    <div>
        <label class="create-label" for="animal_name">Pakeiskite jo spalva.</label>
        <select class="animal_color" name="animal_color">
            @foreach($colors as $color)
            <option class="create-input" value="{{$color->id}}" style="background:{{$color->color}}" @if($animal->color_id == $color->id) selected @endif>{{$color->title}}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label class="create-label" for="animal_name">Pakeiskite jo pavadinima.</label>
        <input class="create-input" type="text" id="animal_name" name="animal_name" value="{{$animal->title}}" />
    </div>
    @csrf
    @method('put')
    <button class="create-btn" type="submit">Decided</button>
</form>
@endsection
