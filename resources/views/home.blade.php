@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="position-relative text-center text-white" style="height: 70vh; background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('{{ asset('images/pexels-fauxels-3184432.jpg') }}'); background-size: cover; background-position: center;">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="display-4 fw-bold mb-3">Welcome to School Management System</h1>
            <p class="lead mb-4">Easily manage your classes, students, and school records in one place</p>
            <a href="{{ route('classes.create') }}" class="btn btn-success btn-lg me-3">Add Class</a>
{{--            <a href="{{ route('students.create') }}" class="btn btn-primary btn-lg">Add Student</a>--}}
        </div>
    </div>

    <!-- About Section -->
    <div class="container my-5">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <h2 class="mb-3">About This System</h2>
                <p class="lead text-muted">
                    This simple School Management System allows you to add, edit, and manage classes and students efficiently.
                </p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4 mt-5">
        <div class="container text-center">
            <p class="mb-1">&copy; {{ date('Y') }} School Management System. All rights reserved.</p>

        </div>
    </footer>
@endsection
