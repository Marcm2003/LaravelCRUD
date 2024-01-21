@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4 rounded">
                    <h1 class="text-center mb-4">Create Task</h1>

                    <form action="{{ route('projecte.tasca.store', ['projecte' => $projecte]) }}" method="post">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" name="slug" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="completed" class="form-label">Completada:</label>
                            <input type="checkbox" id="completed" name="completed" value="1">
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" rows="5" class="form-control" required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
