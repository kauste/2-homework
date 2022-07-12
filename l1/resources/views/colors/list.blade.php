@extends('colors.main')
@section('content')
<form class="source-form" action="{{route('colorsList')}}" method="get"> <!--ar gali forma buti get??-->
    <div class="sorce-name">Sort by</div>
    <select name="sort" class="source-select">
        <option class="sorce-option" value="asc" @if($sort == 'asc') selected @endif>A-Z</option>
        <option class="sorce-option" value="desc" @if($sort == 'desc') selected @endif>Z-A</option>
        <option class="sorce-option" value="default" @if($sort == 'default' || $sort == null)selected @endif>default</option>
    </select>
    <button class="source-btn"type="submit">Sort</button>
</form>
<div class="list-cubes">
    @forelse($colors as $color)
    <div class="one-list-color">
        <div class="color-cube" style="background-color:{{$color->color}}">{{$color->title}}</div>
        <div class="list-actions">
            <a class="list-action" href="{{route('colorsEdit', $color)}}">EDIT</a>
            <form method="post" action={{route('colorsDestroy', $color)}}>
                @csrf
                @method('delete')
                <button class="list-action" type="submit">DESTROY</button>
            </form>
        </div>
    </div>
    @empty
    <div>Nebera spalvyciu</div>
    @endforelse
</div>
@endsection
