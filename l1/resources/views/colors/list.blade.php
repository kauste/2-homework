@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Sort by</div>
                <div class="card-body">
                    <form class="source-form sort-form" action="{{route('colorsList')}}" method="get">
                        <select name="sort" class="source-select col-3">
                            <option class="sorce-option" value="asc" @if($sort=='asc' ) selected @endif>A-Z</option>
                            <option class="sorce-option" value="desc" @if($sort=='desc' ) selected @endif>Z-A</option>
                            <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
                        </select>
                        <button class="btn btn-outline-success" type="submit">Sort</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>List of colors</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($colors as $color)
                        <li class="list-group-item" @if(Auth::user()->role < 9) style="display:flex; justify-content:center" @endif>
                            <div class="color-cube" style="background-color:{{$color->color}}">
                                <b>{{$color->title}}</b>
                            </div>
                            @if(Auth::user()->role > 9)
                            <div class="list-actions">
                                <div>
                                    <a class="btn btn-outline-info" href="{{route('colorsEdit', $color)}}">EDIT</a>
                                </div>
                                <form method="post" action={{route('colorsDestroy', $color)}}>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">DESTROY</button>
                                </form>
                            </div>
                            @endif
                        </li>
                        @empty
                        <li class="list-group-item">No colors</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
