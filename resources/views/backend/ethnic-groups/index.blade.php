@extends('backend.layouts.main')

@section('title', 'Ethnic Groups')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Ethnic Groups</h4>

    <a href="{{ route('admin.ethnic-groups.create') }}" class="btn btn-primary mb-3">Add Ethnic Group</a>

    <div class="card">
        <h5 class="card-header">Ethnic Groups List</h5>
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
                    @foreach ($ethnicGroups as $group)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $group->name }}</td>
                            <td>{{ $group->description }}</td>
                            <td>
                                <a href="{{ route('admin.ethnic-groups.edit', $group->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.ethnic-groups.destroy', $group->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('admin.ethnic-groups.show', $group->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
