@extends('Template')

    @section('title')
        add matt
    @endsection
    
    @section('table')
        {{ Form::open(array('url' => 'addmatiere')) }}
            <h1>hi</h1>
        {{ Form::close() }}
    @endsection