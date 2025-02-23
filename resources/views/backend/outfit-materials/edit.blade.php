@extends('backend.layouts.main')

@section('title', 'Edit Material')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Outfit Materials /</span> Edit Material</h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.outfit-materials.update', $material->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Material Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $material->name }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description">{{ $material->description }}</textarea>
                </div>

                <button type="submit" class="btn btn-success">Update Material</button>
            </form>
        </div>
    </div>
</div>
@endsection
