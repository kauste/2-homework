@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit animals</div>

                <div class="card-body">
                    <form class="create-form" action="{{route('animalsUpdate', $animal)}}" method="post">
                        <div class="form-group">
                            <label class="create-label" for="animal_name">Pakeiskite jo spalva.</label>
                            <select class="form-control" name="animal_color">
                                @foreach($colors as $color)
                                <option class="create-input" value="{{$color->id}}" style="background:{{$color->color}}" @if($animal->color_id == $color->id) selected @endif>{{$color->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="create-label" for="animal_name">Pakeiskite jo pavadinima.</label>
                            <input class="form-control" type="text" id="animal_name" name="animal_name" value="{{$animal->title}}" />
                        </div>
                        @csrf
                        @method('put')
                        <button class="create-btn" type="submit">Decided</button>
                    </form>
                </div>
            </div>
        </div>
    </div @endsection
