@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create animal</div>

                <div class="card-body">
                    <form class="create-form" action="{{route('animalsCreate')}}" method="post">
                        <div class="form-group">
                            <label class="create-label" for="animal_choice">Koks tai gyvis?</label>
                            <input class="form-control" type="text" id="animal_choice" name="animal_choice" />
                        </div>
                        <div class="form-group">
                            <label class="create-label" for="animal_color">Suteikite jam spalva</label>
                            <select id="animal_color" name="animal_color" class="form-control">
                                @forelse($colors as $color)
                                <option style="background:{{$color->color}}" value="{{$color->id}}">{{$color->title}}</option>
                                @empty
                                <option background="blue" value="blue"></option>
                                @endforelse
                            </select>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success mt-2" type="submit">Create</button>
                    </form>
                </div>
            </div>
        </div>
    </div @endsection
