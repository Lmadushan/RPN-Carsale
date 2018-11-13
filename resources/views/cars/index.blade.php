@extends('layouts.app')

@section('content')
    <h1>Cars</h1>
    @if(count($cars)>=1)
        @foreach($cars as $car)
            <div class="well">
                <h3><a href="/cars/{{$car->id}}">{{$car->Make}} {{$car->Model}}</a></h3>
            <small>Added on {{$car->created_at}}</small>
            </div>
        @endforeach
    @else
        <p>No Posts Found</p>
    @endif
@endsection