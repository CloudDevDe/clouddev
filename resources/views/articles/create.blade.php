@extends('app')

@section('content')
    <h1>Write a new Article</h1>

    <hr/>

    {!! Form::open(['url' => 'articles']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Title', ['class' => 'control-label']) !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>

    <div class="form-group">
        {!! Form::label('body', 'Body', ['class' => 'control-label']) !!}
        {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary form control']) !!}
    </div>
    {!! Form::close() !!}
@stop