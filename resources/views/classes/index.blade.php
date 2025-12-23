@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h2>All Classes</h2>
        <a href="{{ route('classes.create') }}" class="btn btn-success">Add New Class</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Class Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class->id }}</td>
                <td>{{ $class->class_name }}</td>
                <td>
                    <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
