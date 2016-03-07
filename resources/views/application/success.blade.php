@extends('layout')

@section('content')
    <h2>Успешно!</h2>
    <pre>
        {!! print_r($response, true) !!}
    </pre>
@endsection