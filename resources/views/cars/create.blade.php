@extends('layouts.app')

@section('content')
    
    <h1>Add Cars</h1>
    
    {!! Form::open(['action' => 'CarsController@store', 'method' => 'POST']) !!}
        <div class= "form-group">
            <div class="col-xs-6">
                {{Form::label('title', 'Make')}}
                {{Form::select('size', ['-' => '-','Lamborghini' => 'Lamborghini', 'Audi' => 'Audi', 'Merc' => 'Merc', 'Jaguar' => 'Jaguar', 'BMW' => 'BMW', 'Rolls Roys' => 'Rolls Roys', 'Toyota' => 'Toyota', 'Suzuki' => 'Suzuki', 'Subaru' => 'Subaru', 'Ford' => 'Ford' ,'Ferrari' => 'Ferrari'])}}
            </div>
            <div class="col-xs-6">
                {{Form::label('title', 'Model')}}
                {{Form::text('title', '', [ 'class' => 'form-control', 'placeholder' =>'Model'])}}
            </div>
        </div>
        <div class= "form-group">
            {{Form::label('body', 'Body')}}
            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' =>'Body'])}}
        </div>
        {{Form::submit('Submit',['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection