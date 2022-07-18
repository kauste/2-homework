@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PAVADINIMAS</div>

                <div class="card-body">
                    <form class="create-form" action="{{route('colorsStore')}}" method="post">
                        <div class="form-group">
                            <label class="create-label" for="color_choice">Išsirinkite spalvą</label>
                            <input class="form-control" type="color" id="color_choice" name="color_choice" />
                        </div>
                        <div class="form-group">
                            <label class="create-label" for="color_name">Suteikite jai pavadinimą</label>
                            <input class="form-control" type="text" id="color_name" name="color_name" />
                        </div>
                        @csrf
                        <button class="btn btn-outline-success mt-2" type="submit">Choose</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
