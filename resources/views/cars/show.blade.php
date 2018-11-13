@extends('layouts.app')

@section('content')

    <a href="/cars" class="btn btn-default">Go back</a>
    <h1>{{$car->Make}} {{$car->Model}}</h1>
    <div>
        <hr>
        <h5>Vehicle type: {{$car->Vehicle_type}}</h5>
        <h5>Generation: {{$car->Generation}}</h5>
        <h5>Number of seater: {{$car->Number_of_seater}}</h5>
        <h5>Length: {{$car->Length}}mm</h5>
        <h5>Width: {{$car->Width}}mm</h5>
        <h5>Height: {{$car->Height}}mm</h5>
        <h5>Track Front: {{$car->TrackFront}}</h5>
        <h5>Track Back: {{$car->TrackBack}}</h5>
        <h5>WheelBase: {{$car->WheelBase}}mm</h5>
        <h5>GroundClearance: {{$car->GroundClearance}}mm</h5>
        <h5>Curb Weight: {{$car->CurbWeight}}kg</h5>
        <h5>Max Trunk Capacity: {{$car->MaxTrunkCapacity}}l</h5>
        <h5>Engine Type: {{$car->Enginetype}}</h5>
        <h5>Fuel Type: {{$car->FuelType}}</h5>
        <h5>Power: {{$car->Power}}Hp</h5>
        <h5>Torque: {{$car->Torque}}Nm</h5>
        <h5>InductionType: {{$car->InductionType}}</h5>
        <h5>ValvesPerCylinder: {{$car->ValvesPerCylinder}}</h5>
        <h5>GearBoxType	: {{$car->GearBoxType}}</h5>
        <h5>NoOfSpeed: {{$car->NoOfSpeed}}</h5>
        <h5>DriveWheels: {{$car->DriveWheels}}</h5>
        <h5>Break: {{$car->NoOfSpeed}}</h5>
        <h5>NoOfSpeed: {{$car->Break}}</h5>
        <h5>MaxSpeed: {{$car->MaxSpeed}}Km/h</h5>
        <h5>acceleration: {{$car->acceleration}}s</h5>
        <h5>FuelConsumptionhighway: {{$car->FuelConsumptionhighway}}Km/l</h5>
        <h5>FuelConsumptionTown: {{$car->FuelConsumptionTown}}Km/l</h5>
        <h5>Price: Rs.{{$car->Price}}</h5>
        

    </div>
    <hr>
    <small>Written on {{$car->created_at}}</small>
    <hr>
    <a href="/cars/{{$car->id}}/edit" class= "btn btn-default">Edit</a>

    {!!Form::open(['action' => ['CarsController@destroy', $car->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection