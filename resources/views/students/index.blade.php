@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-header">Students <a href="{{ route('student.create') }}" class="btn btn-primary pull-right">Add Student</a></h1>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if(count($students) === 0)
                    No students added yet!
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
                        @foreach($students as $student)
                            <tr>
                                <td>{{ $student['id'] }}</td>
                                <td><a href="{{ route('student.detail', $student['id']) }}">{{ $student['name'] }}</a></td>
                                <td>34</td>
                                <td>999</td>
                            </tr>
                    @endforeach
                        </tbody> </table>
                @endif
            </div>
        </div>
    </div>
@endsection
