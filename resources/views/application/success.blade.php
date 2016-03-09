@extends('layout')

@section('content')
    <h2>Успешно!</h2>
    <pre>
        {!! print_r($response, true) !!}
    </pre>
    <pre>
        {!! $response->return !!}
    </pre>
@endsection