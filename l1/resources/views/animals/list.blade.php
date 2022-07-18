@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">List of beasts</div>

                <div class="card-body">
                    <form class="source-form" action="{{route('animalsList')}}" method="get">
                        <!--ar gali forma buti get??-->
                        <div class="sorce-name">Sort by</div>
                        <select name="sort" class="source-select">
                            <option class="sorce-option" value="asc" @if($sort=='asc' ) selected @endif>A-Z</option>
                            <option class="sorce-option" value="desc" @if($sort=='desc' ) selected @endif>Z-A</option>
                            <option class="sorce-option" value="default" @if($sort=='default' || $sort==null)selected @endif>default</option>
                        </select>
                        <button class="source-btn" type="submit">Sort</button>
                    </form>
                    <div class="list-cubes">
                        @forelse($animals as $animal)
                        <div class="one-list-color">
                            <div class="color-cube" style="background:{{$animal->showColorFromOtherTable->color}}"><b>{{$animal->title}}</b><br>{{$animal->showColorFromOtherTable->title}} </div>
                            <div class="list-actions">
                                <a class="list-action" href="{{route('animalsEdit', $animal)}}">EDIT</a>
                                <form method="post" action={{route('animalsDestroy', $animal)}}>
                                    @csrf
                                    @method('delete')
                                    <button class="list-action" type="submit">DESTROY</button>
                                </form>
                            </div>
                        </div>
                        @empty
                        <div>Nebera animalu</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
