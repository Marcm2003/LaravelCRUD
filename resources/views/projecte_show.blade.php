@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4 rounded">
                    <h1 class="text-center mb-4">Detalles del Proyecto</h1>

                    <div class="mb-3">
                        <p class="fw-bold">ID:</p>
                        <p>{{ $projecte->id }}</p>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Nombre:</p>
                        <p>{{ $projecte->name }}</p>
                    </div>

                    <div class="mb-3">
                        <p class="fw-bold">Slug:</p>
                        <p>{{ $projecte->slug }}</p>
                    </div>

                    <div class="text-center mt-3">
                        <a href="{{ route('projecte.index') }}" class="btn btn-primary">Volver a la lista</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
