@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">Sort by</div>
                <div class="card-body">
                    <form class="form-group sort-form" action="{{route('animalsList')}}" method="get">
                        <!--ar gali forma buti get??-->
                        <select name="sort" class="col-3">
                            <option class="sorce-option" value="asc" @if($sort=='asc' ) selected @endif>A-Z</option>
                            <option class="sorce-option" value="desc" @if($sort=='desc' ) selected @endif>Z-A</option>
                            <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
                        </select>
                        <button class="btn btn-outline-success ml-2" type="submit">Sort</button>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2>List of beasts</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($animals as $animal)
                        <li class="list-group-item" @if(Auth::user()->role < 9) style="display:flex; justify-content:center" @endif>
                            <div class="color-cube" style="background:{{$animal->showColorFromOtherTable->color}}"><b>{{$animal->title}}</div>
                            @if(Auth::user()->role > 9)
                            <div class="list-actions">
                                <a class="btn btn-outline-info"  href="{{route('animalsEdit', $animal)}}">EDIT</a>
                                <form method="post" action={{route('animalsDestroy', $animal)}}>
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger" type="submit">DESTROY</button>
                                </form>
                            </div>
                            @endif
                        </li>
                        @empty
                        <li class="list-group-item">Nebera animalu</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
