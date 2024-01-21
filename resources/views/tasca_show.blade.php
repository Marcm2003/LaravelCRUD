@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4 rounded">
                    <h1 class="text-center mb-4">Tasc Details</h1>

                    <div class="mb-3">
                        <p class="fw-bold">ID:</p>
                        <p>{{ $tasca->id }}</p>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Name:</p>
                        <p>{{ $tasca->name }}</p>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Slug:</p>
                        <p>{{ $tasca->slug }}</p>
                    </div>

                    <div class="text-center">
                        <a href="{{ route('projecte.index') }}" class="btn btn-primary mt-3">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
