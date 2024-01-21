@extends('master')

@section('content')
    <div class="container mt-8">
        <h1 class="text-center text-white">List of Projects</h1>

        <div class="col text-center">
            <a href="{{ route('projecte.create') }}" class="btn btn-success btn-lg w-75 mb-4">New Project</a>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @foreach($projectes as $projecte)
                <div class="card mt-4">
                    <div class="card-header bg-primary text-white d-flex">
                        <h2 class="flex-grow-2 me-4">{{ $projecte->name }}</h2>
                        <p><strong>ID:</strong> {{ $projecte->id }}</p>
                        <p class="ms-4"><strong>Created:</strong> {{ $projecte->created_at->format('d/m/Y H:i:s') }}</p>
                        <p class="ms-4"><strong>Updated:</strong> {{ $projecte->updated_at->format('d/m/Y H:i:s') }}</p>
                        <p class="ms-4"><strong>Slug:</strong> {{ $projecte->slug }}</p>
                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('projecte.tasca.create', $projecte->id) }}" class="btn btn-primary">New Task</a>
                            <a href="{{ route('projecte.show', ['projecte' => $projecte->id]) }}" class="btn btn-warning ms-2">Details</a>
                            <form action="{{ route('projecte.destroy', $projecte->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Delete project?')">Delete</button>
                            </form>
                            <a href="{{ route('projecte.edit', $projecte->id) }}" class="btn btn-secondary ms-2">Edit</a>
                        </div>

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Completed</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($projecte->tasca as $tasca)
                                    <tr>
                                        <td>{{ $tasca->id }}</td>
                                        <td>{{ $tasca->name }}</td>
                                        <td>{{ $tasca->slug }}</td>
                                        <td>{{ $tasca->created_at->format('d/m/Y H:i:s') }}</td>
                                        <td>{{ $tasca->updated_at->format('d/m/Y H:i:s') }}</td>
                                        <td>
                                            @if($tasca->completed)
                                                <span class="badge bg-success">Yes</span>
                                            @else
                                                <span class="badge bg-danger">No</span>
                                            @endif
                                        </td>
                                        <td>{{ $tasca->description }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a href="{{ route('projecte.tasca.show', ['projecte' => $projecte->id, 'tasca' => $tasca]) }}" class="btn btn-warning">Details</a>
                                                <a href="{{ route('projecte.tasca.edit', ['projecte' => $projecte->id, 'tasca' => $tasca]) }}" class="btn btn-primary">Edit</a>
                                                <form action="{{ route('projecte.tasca.destroy', ['projecte' => $projecte, 'tasca' => $tasca]) }}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('¿Delete task?')">Delete</button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
