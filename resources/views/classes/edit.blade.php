@extends('layouts.app')

@section('content')
    <h2>Edit Class</h2>

    <form action="{{ route('classes.update', $class->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="class_name" class="form-label">Class Name</label>
            <input type="text" class="form-control" name="class_name" id="class_name" value="{{ old('class_name', $class->class_name) }}">
            @error('class_name')
            <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update Class</button>
        <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back</a>
    </form>
@endsection
