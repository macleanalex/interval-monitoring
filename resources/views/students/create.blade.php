@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Students <small>add a new student</small></h1>

                {!! Form::open(['route' => 'student.store']) !!}
                {!! Form::label('name', 'Name of student') !!}
                {!! Form::text('name') !!}
                {!! Form::submit('Save') !!}
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@endsection
