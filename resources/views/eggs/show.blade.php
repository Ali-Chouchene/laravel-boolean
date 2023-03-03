@extends('/layouts.main')
@section('content')
<div class="container py-5">
    <div class="card mb-3">
        <img src="{{$egg->main_thumb}}" class="card-img-top" alt="{{$egg->name}}" height="500 px">
        <div class="card-body">
            <h1 class="card-title text-primary fw-bold fst-italic">{{$egg->name}}</h1>
            <div class="d-flex align-items-center">
                <p class="card-text m-0 me-3">Description: {{$egg->content}}</p>
                <img id="thumb" class="img-fluid" src="{{$egg->content_thumb}}" alt="">
            </div>
            <p class="card-text">Chocolate Type: <strong>{{$egg->chocolate_type}}</strong></p>
            <div class="d-flex align-items-center">
                <p class="m-0 card-text me-3">Packaging Color: </p>
                <div id="color" style="background-color: {{$egg->color}};">
                </div>
            </div>
            <p>Size: <strong>{{$egg->size}}</strong></p>
        </div>
    </div>
    <a class="btn btn-primary" href="{{route('home')}}">Go back</a>
</div>
@endsection