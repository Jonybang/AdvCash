{!! Form::open(array('url' => '/', 'files' => true)) !!}
    {!! Form::label('price', 'Цена') !!}
    {!! Form::text('price', '', ['class'=>'form-control', 'required']) !!}
    {!! Form::label('text', 'Пожелания') !!}
    {!! Form::textarea('text', '', ['class'=>'form-control', 'rows' => 10]) !!}
    {!! Form::submit('Купить', ['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}