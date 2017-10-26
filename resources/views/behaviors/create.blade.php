@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{ $student['name'] }} <small>add a new behavior</small></h1>

                {!! Form::open(['route' => ['behavior.store', 'id' => $student['id'] ] ]) !!}
                {!! Form::label('name', 'Title of behavior') !!}<br>
                {!! Form::text('name') !!}<br><br>
                {!! Form::label('description', 'Description of behavior') !!}<br>
                {!! Form::textarea('description') !!}<br>
                {!! Form::submit('Save') !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
