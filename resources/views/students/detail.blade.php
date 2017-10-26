@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">{{ $student['name'] }} <a href="{{ route('behavior.create', ['id' => $student['id']]) }}" class="btn btn-primary pull-right">Add Student</a></h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if($behaviors->count() === 0)
                    No behaviors added yet for this student
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Behaviors</th>
                                <th>Events</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($behaviors as $behavior)
                            <tr>
                                <td>{{ $behavior['id'] }}</td>
                                <td><a href="#">{{ $behavior['name'] }}</a></td>
                                <td>34</td>
                                <td>999</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                @endif
            </div>
        </div>
    </div>
@endsection
