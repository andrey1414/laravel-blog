@extends('layouts.default')
    {!! var_dump($errors); !!}
    {!! Form::open(['action' => 'PostController@store']) !!}
        <div class="form_group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form_control']) !!}
        </div>
        <div class="form_group">
            {!! Form::label('body', 'Body:') !!}
            {!! Form::text('body', null, ['class' => 'form_control']) !!}
        </div>
        <div>
            {!! Form::submit('Send') !!}
        </div>
    {!! Form::close() !!}