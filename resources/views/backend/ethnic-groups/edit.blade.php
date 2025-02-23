@extends('backend.layouts.main')

@section('title', 'Edit Ethnic Group')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard / Ethnic Groups /</span> Edit Ethnic Group
    </h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.ethnic-groups.update', $ethnicGroup->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Ethnic Group Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $ethnicGroup->name) }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description', $ethnicGroup->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="origin" class="form-label">Origin</label>
                    <input type="text" class="form-control" id="origin" name="origin" value="{{ old('origin', $ethnicGroup->origin) }}">
                    @error('origin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Current Image</label><br>
                    @if($ethnicGroup->image)
                        <img src="{{ asset('storage/' . $ethnicGroup->image) }}" alt="Ethnic Group Image" width="100" id="currentImage">
                    @else
                        <p>No image available</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload New Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <img id="imagePreview" src="#" alt="New Image Preview" class="mt-2" style="display: none; width: 100px;">
                </div>

                <button type="submit" class="btn btn-success">Update Ethnic Group</button>
            </form>
        </div>
    </div>
</div>

<script>
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('imagePreview');
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
@endsection
