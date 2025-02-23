@extends('backend.layouts.main')

@section('title', 'Outfit Materials')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Outfit Materials</h4>

    <a href="{{ route('admin.outfit-materials.create') }}" class="btn btn-primary mb-3">Add Material</a>

    <div class="card">
        <h5 class="card-header">Materials List</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($materials as $material)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $material->name }}</td>
                            <td>{{ $material->description }}</td>
                            <td>
                                <a href="{{ route('admin.outfit-materials.edit', $material->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.outfit-materials.destroy', $material->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('admin.outfit-materials.show', $material->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
