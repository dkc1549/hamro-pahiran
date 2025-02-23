@extends('backend.layouts.main')

@section('title', 'Outfits')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Outfits</h4>

        <a href="{{ route('admin.outfits.create') }}" class="btn btn-primary mb-3">Add Outfit</a>

        <div class="card">
            <h5 class="card-header">Outfits List</h5>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Ethnic Group</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($outfits as $outfit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $outfit->name }}</td>
                                <td>{{ $outfit->ethnicGroup->name }}</td>
                                <td>
                                    <img src="{{ asset('storage/' . $outfit->photo) }}" width="50px" height="50px" alt="">
                                </td>
                                <td>
                                    <a href="{{ route('admin.outfits.edit', $outfit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('admin.outfits.destroy', $outfit->id) }}" method="POST" class="d-inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
