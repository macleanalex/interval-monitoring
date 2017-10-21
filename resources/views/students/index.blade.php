@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Students</h1>

                {{ $students }}

            </div>
        </div>
    </div>
@endsection
