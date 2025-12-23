@extends('layouts.app')

@section('content')
    <h2>Add New Class</h2>

    <form action="{{ route('classes.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="class_name" class="form-label">Class Name</label>
            <input type="text" class="form-control" name="class_name" id="class_name" value="{{ old('class_name') }}">
            @error('class_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Add Class</button>
        <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
