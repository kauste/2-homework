@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Change color</div>

                <div class="card-body">
                    <form action="{{route('colorsUpdate', $color)}}" method="post">
                        <div class="form-group">
                            <label class="create-label" for="color_choice">Change this ugly color to normal:</label>
                            <input class="form-control" type="color" id="color_choice" name="color_choice" value="{{$color->color}}">
                        </div>
                        <div class="form-group">
                            <label class="create-label" for="color_name">Change colors name to proper one: </label>
                            <input class="form-control" type="text" id="color_name" name="color_name" value="{{$color->title}}" />
                        </div>
                        @csrf
                        @method('put')
                        <button class="btn btn-outline-success mt-2" type="submit">Decided</button>
                    </form>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>