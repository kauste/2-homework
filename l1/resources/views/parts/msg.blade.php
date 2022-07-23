@if(session('message'))
<div class="message"> {{session('message')}} </div>
@endif
@if ($errors->any())
<div class="">
    <ul class="list-group">
        @foreach ($errors->all() as $error)
        <li class=" message list-group-item list-group-item-danger">{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
