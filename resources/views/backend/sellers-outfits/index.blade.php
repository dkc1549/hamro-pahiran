@extends('backend.layouts.main')

@section('title', 'Sellers\' Outfits')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard /</span> Sellers' Outfits</h4>

    <a href="{{ route('admin.sellers-outfits.create') }}" class="btn btn-primary mb-3">Add Outfit</a>

    <div class="card">
        <h5 class="card-header">Sellers' Outfits List</h5>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Seller</th>
                        <th>Outfit Name</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($outfits as $outfit)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $outfit->seller->name }}</td>
                            <td>{{ $outfit->name }}</td>
                            <td>{{ $outfit->price }}</td>
                            <td>{{ $outfit->stock }}</td>
                            <td>
                                <a href="{{ route('admin.sellers-outfits.edit', $outfit->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.sellers-outfits.destroy', $outfit->id) }}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                <a href="{{ route('admin.sellers-outfits.show', $outfit->id) }}" class="btn btn-info btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
