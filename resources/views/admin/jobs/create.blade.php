@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Create Job</h2>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form action="{{ route('admin.jobs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label>Job Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title') }}">
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Job Image / Logo</label>
                <input type="file" name="image" class="form-control">
                @error('image') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location') }}">
                @error('location') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description') }}</textarea>
                @error('description') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label>Requirements</label>
                <textarea name="requirements" class="form-control" rows="5">{{ old('requirements') }}</textarea>
                <small class="text-muted">Each requirement লিখে Enter দিলে frontend এ list হবে।</small>
            </div>

            <div class="form-check mb-4">
                <input type="checkbox" name="status" class="form-check-input" id="status" checked>
                <label for="status" class="form-check-label">Active</label>
            </div>

            <div class="mb-3">
                <div class="col-md-4">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1">Open</option>
                        <option value="0">Closed</option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Save Job</button>
            <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection