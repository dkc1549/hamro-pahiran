@extends('backend.layouts.main')

@section('title', 'Edit Outfit')

@section('main-content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard / Outfits /</span> Edit Outfit</h4>

        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.outfits.update', $outfit->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Outfit Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $outfit->name) }}" required>
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="ethnic_group_id" class="form-label">Ethnic Group</label>
                        <select class="form-control" id="ethnic_group_id" name="ethnic_group_id" required>
                            @foreach ($ethnicGroups as $group)
                                <option value="{{ $group->id }}" {{ old('ethnic_group_id', $outfit->ethnic_group_id) == $group->id ? 'selected' : '' }}>
                                    {{ $group->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('ethnic_group_id')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Outfit Image</label>
                        <input type="file" class="form-control" id="image" name="photo" accept="image/*" onchange="previewImage(event)">
                        @error('photo')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mt-2">
                            <img id="image-preview" src="{{ asset('storage/' . $outfit->photo) }}" width="100px" class="{{ $outfit->photo ? '' : 'd-none' }}">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Update Outfit</button>
                </form>
            </div>
        </div>
    </div>

<script>
    function previewImage(event) {
        let reader = new FileReader();
        reader.onload = function () {
            let img = document.getElementById('image-preview');
            img.src = reader.result;
            img.classList.remove('d-none');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
