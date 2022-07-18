@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of colors</div>
                <div class="card-body">
                    <form class="source-form" action="{{route('colorsList')}}" method="get">
                        <!--ar gali forma buti get??-->
                        <div class="sorce-name">Sort by</div>
                        <select name="sort" class="source-select">
                            <option class="sorce-option" value="asc" @if($sort=='asc' ) selected @endif>A-Z</option>
                            <option class="sorce-option" value="desc" @if($sort=='desc' ) selected @endif>Z-A</option>
                            <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
                        </select>
                        <button class="source-btn" type="submit">Sort</button>
                    </form>
                    <ul class="list-group">
                        @forelse($colors as $color)
                        <li class="list-group-item">
                            <div class="color-cube" style="background-color:{{$color->color}}"><b>{{$color->title}}</b><br>{{$color->color}} </div>
                            <div class="list-actions">
                                <a class="btn btn-outline-info" href="{{route('colorsEdit', $color)}}">EDIT</a>
                                <form method="post" action={{route('colorsDestroy', $color)}}>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">DESTROY</button>
                                </form>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">Nebera spalvyciu</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
