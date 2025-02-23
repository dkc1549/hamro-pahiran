@extends('backend.layouts.main')

@section('title', 'Add Outfit')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard / Outfits /</span> Add Outfit
    </h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.outfits.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="ethnic_group_id" class="form-label">Ethnic Group</label>
                    <select name="ethnic_group_id" id="ethnic_group_id" class="form-control">
                        @foreach($ethnicGroups as $group)
                            <option value="{{ $group->id }}" {{ old('ethnic_group_id') == $group->id ? 'selected' : '' }}>
                                {{ $group->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('ethnic_group_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Outfit Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="photo" class="form-label">Upload Photo</label>
                    <input type="file" class="form-control" id="photo" name="photo" accept="image/*" onchange="previewImage(event)">
                    @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <img id="photo-preview" src="#" alt="Image Preview" class="mt-2 d-none" width="150">
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="4">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="historical_context" class="form-label">Historical Context</label>
                    <textarea class="form-control" id="historical_context" name="historical_context" rows="4">{{ old('historical_context') }}</textarea>
                    @error('historical_context')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="hidden" name="used_in_festivals" value="0">
                    <input type="checkbox" class="form-check-input" id="used_in_festivals" value="1" name="used_in_festivals" {{ old('used_in_festivals') ? 'checked' : '' }}>
                    <label for="used_in_festivals" class="form-check-label">Used in Festivals</label>
                    @error('used_in_festivals')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input type="hidden" name="used_in_rituals" value="0">
                    <input type="checkbox" class="form-check-input" id="used_in_rituals" name="used_in_rituals" value="1" {{ old('used_in_rituals') ? 'checked' : '' }}>
                    <label for="used_in_rituals" class="form-check-label">Used in Rituals</label>
                    @error('used_in_rituals')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Outfit</button>
            </form>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        let reader = new FileReader();
        reader.onload = function () {
            let img = document.getElementById('photo-preview');
            img.src = reader.result;
            img.classList.remove('d-none');
        }
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
@endsection
