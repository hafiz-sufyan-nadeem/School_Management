@extends('layouts.app')

@section('content')
    <div class="position-relative text-center text-white" style="height: 80vh; background-image: url('{{ asset('/images/pexels-fauxels-3184432.jpg') }}'); background-size: cover; background-position: center;">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-4 fw-bold mb-4">Welcome to School Management System</h1>
            <p class="lead mb-5">Manage your classes and students easily</p>
            <a href="{{ route('classes.create') }}" class="btn btn-success btn-lg me-3">Add Class</a>
            <a href="{{ route('students.create') }}" class="btn btn-primary btn-lg">Add Student</a>
        </div>
    </div>
@endsection
