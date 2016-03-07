@extends('layout')

@section('content')
    {!! Form::open(array('url' => '/', 'files' => true)) !!}
        <div>{!! Form::label('price', 'Цена') !!}</div>
        <div>{!! Form::text('price', '', ['class'=>'form-control', 'required']) !!}</div>
        <div>{!! Form::label('email', 'Email') !!}</div>
        <div>{!! Form::text('email', '', ['class'=>'form-control', 'required']) !!}</div>
        <div>{!! Form::label('text', 'Примечания') !!}</div>
        <div>{!! Form::textarea('text', '', ['class'=>'form-control', 'rows' => 10]) !!}</div>
        <div>{!! Form::submit('Купить', ['class'=>'btn btn-primary']) !!}</div>
    {!! Form::close() !!}
@endsection