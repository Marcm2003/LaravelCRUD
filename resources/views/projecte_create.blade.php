@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4 rounded">
                    <h1 class="text-center mb-4">Create Project</h1>

                    <form method="POST" action="{{ route('projecte.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <textarea name="slug" class="form-control col-12" rows="4" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
