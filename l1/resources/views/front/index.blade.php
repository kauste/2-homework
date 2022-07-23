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
                @include('parts.pagination')
                    <ul class="list-group">
                        @forelse($animals as $animal)
                        <li class="list-group-item">
                            <div class="color-cube" style="background:{{$animal->color}}"><b>{{$animal->title}}</b> <i>{{$animal->color_title}}</i></div>
                            <div class="list-actions">
                                <form class="client-form" method="post" action={{route('frontAdd')}}>
                                    <label for="amount">Amount:</label>
                                    <input class="col-2"type="number" min="1" step="1" name="amount" id="amount">
                                    <input name="animal_id" type="hidden" value="{{$animal->id}}">
                                    <button class="btn btn-outline-danger" type="submit">Order</button>
                                    @csrf
                                    @method('post')
                                </form>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No animals.</li>
                        @endforelse
                    </ul>
                @include('parts.pagination')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
