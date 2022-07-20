@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mb-4">
               @include('front.box')
            <div class="card">
                <div class="card-header">
                    <h2>List of beasts</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($animals as $animal)
                        <li class="list-group-item" @if(Auth::user()->role < 9) style="display:flex; justify-content:center; column-gap:20px" @endif>
                            <div class="color-cube" style="background:{{$animal->color}}"><b>{{$animal->title}}</b> <i>{{$animal->color_title}}</i></div>
                            <div class="list-actions">
                                <form method="get" action={{route('frontIndex')}}>
                                    @csrf
                                    @method('get')
                                    <button class="btn btn-outline-danger" type="submit">Love it</button>
                                </form>
                            </div>
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
