{!! Form::open(array('url' => '/', 'files' => true)) !!}
    <div>{!! Form::label('price', 'Цена') !!}</div>
    <div>{!! Form::text('price', '', ['class'=>'form-control', 'required']) !!}</div>
    <div>{!! Form::label('text', 'Пожелания') !!}</div>
    <div>{!! Form::textarea('text', '', ['class'=>'form-control', 'rows' => 10]) !!}</div>
    <div>{!! Form::submit('Купить', ['class'=>'btn btn-primary']) !!}</div>
{!! Form::close() !!}
<br>
Исходники: <a href="https://github.com/Jonybang/AdvCash">https://github.com/Jonybang/AdvCash</a>