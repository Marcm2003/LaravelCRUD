@extends('master')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-light p-4 rounded">
                    <h1 class="text-center mb-4">Editar Tasca</h1>

                    <form action="{{ route('projecte.tasca.update', ['projecte' => $projecte, 'tasca' => $tasca]) }}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" name="name" value="{{ $tasca->name }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug:</label>
                            <input type="text" name="slug" value="{{ $tasca->slug }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="completed" class="form-label">Completed</label>
                            <div class="form-check">
                                <input type="hidden" name="completed" value="0">
                                <input type="checkbox" id="completed" name="completed" class="form-check-input" value="1" {{ $tasca->completed ? 'checked' : '' }}>
                                <label for="completed" class="form-check-label">Yes</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label>
                            <textarea name="description" rows="5" class="form-control" required>{{ $tasca->description }}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
