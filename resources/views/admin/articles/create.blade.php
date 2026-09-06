@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Create Article</h2>

<div class="card border-0 shadow-sm">
    <div class="card-body">

        <form action="{{ route('admin.articles.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label>Category</label>
                <input type="text" name="category" class="form-control" value="Uncategorized">
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control" value="mptravels">
            </div>

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="5" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label>Facebook Link</label>
                <input type="url" name="facebook" class="form-control">
            </div>

            <div class="mb-3">
                <label>Instagram Link</label>
                <input type="url" name="instagram" class="form-control">
            </div>

            <div class="mb-3">
                <label>Pinterest Link</label>
                <input type="url" name="pinterest" class="form-control">
            </div>

            <div class="mb-3">
                <label>Twitter/X Link</label>
                <input type="url" name="twitter" class="form-control">
            </div>

            <div class="mb-3">
                <label>Website Link</label>
                <input type="url" name="website" class="form-control">
            </div>

            <div class="mb-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1">Active</option>
                    <option value="0">Hidden</option>
                </select>
            </div>

            <button class="btn btn-success">Save Article</button>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Back</a>
        </form>

    </div>
</div>

@endsection