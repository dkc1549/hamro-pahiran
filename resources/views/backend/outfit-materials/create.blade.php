@extends('backend.layouts.main')

@section('title', 'Add Outfit Material')

@section('main-content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">
        <span class="text-muted fw-light">Dashboard / Outfit Materials /</span> Add Outfit Material
    </h4>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.outfit-materials.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="outfit_id" class="form-label">Outfit</label>
                    <select name="outfit_id" id="outfit_id" class="form-control" required>
                        <option value="">-- Select Outfit --</option>
                        @foreach($outfits as $outfit)
                            <option value="{{ $outfit->id }}" {{ old('outfit_id') == $outfit->id ? 'selected' : '' }}>
                                {{ $outfit->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('outfit_id')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="material_name" class="form-label">Material Name</label>
                    <input type="text" class="form-control" id="material_name" name="material_name" value="{{ old('material_name') }}" required>
                    @error('material_name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Material</button>
            </form>
        </div>
    </div>
</div>
@endsection
