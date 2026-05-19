@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Edit Job</h2>

<div class="card border-0 shadow-sm">
    <div class="card-body">
        <form action="{{ route('admin.jobs.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Job Title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $job->title) }}">
            </div>

            <div class="mb-3">
                <label>Location</label>
                <input type="text" name="location" class="form-control" value="{{ old('location', $job->location) }}">
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" class="form-control" rows="5">{{ old('description', $job->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Requirements</label>
                <textarea name="requirements" class="form-control" rows="5">{{ old('requirements', $job->requirements) }}</textarea>
            </div>

            <div class="form-check mb-4">
                <input type="checkbox" name="status" class="form-check-input" id="status" {{ $job->status ? 'checked' : '' }}>
                <label for="status" class="form-check-label">Active</label>
            </div>

            <div class="mb-3">
                <div class="col-md-4">
                    <label>Status</label>
                    <select name="status" class="form-control">
                        <option value="1"
                            {{ $job->status == 1 ? 'selected' : '' }}>
                            Open
                        </option>
                        <option value="0"
                            {{ $job->status == 0 ? 'selected' : '' }}>
                            Closed
                        </option>
                    </select>
                </div>
            </div>

            <button type="submit" class="btn btn-success">Update Job</button>
            <a href="{{ route('admin.jobs.index') }}" class="btn btn-secondary">Back</a>
        </form>
    </div>
</div>

@endsection