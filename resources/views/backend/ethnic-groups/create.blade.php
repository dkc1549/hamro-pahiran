@extends('backend.layouts.main')

@section('title', 'Add Ethnic Group')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard / Ethnic Groups /</span> Add Ethnic Group
    </h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.ethnic-groups.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Ethnic Group Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="origin" class="form-label">Origin</label>
                    <input type="text" class="form-control" id="origin" name="origin" value="{{ old('origin') }}">
                    @error('origin')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload Image</label>
                    <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <img id="imagePreview" src="#" alt="Image Preview" class="mt-2" style="display: none; width: 100px;">
                </div>

                <button type="submit" class="btn btn-primary">Add Ethnic Group</button>
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
