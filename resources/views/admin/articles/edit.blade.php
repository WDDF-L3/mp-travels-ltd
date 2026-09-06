@extends('admin.layouts.app')

@section('content')

<h2 class="mb-4">Edit Article</h2>

<div class="card border-0 shadow-sm">
    <div class="card-body">

        <form action="{{ route('admin.articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Category</label>
                <input type="text" name="category" class="form-control"
                       value="{{ old('category', $article->category) }}">
            </div>

            <div class="mb-3">
                <label>Author</label>
                <input type="text" name="author" class="form-control"
                       value="{{ old('author', $article->author) }}">
            </div>

            <div class="mb-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control"
                       value="{{ old('title', $article->title) }}" required>
            </div>

            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control">
                @if($article->image)
                    <img src="{{ asset('uploads/articles/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid mt-2" style="max-width: 200px;">
                @endif
            </div>

            <div class="mb-3">
                <label>Description</label>
                <textarea name="description" rows="5" class="form-control" required>{{ old('description', $article->description) }}</textarea>
            </div>

            <div class="mb-3">
                <label>Facebook Link</label>
                <input type="url" name="facebook" class="form-control"
                       value="{{ old('facebook', $article->facebook) }}">
            </div>

            <div class="mb-3">
                <label>Instagram Link</label>
                <input type="url" name="instagram" class="form-control"
                       value="{{ old('instagram', $article->instagram) }}">
            </div>

            <div class="mb-3">
                <label>Pinterest Link</label>
                <input type="url" name="pinterest" class="form-control"
                       value="{{ old('pinterest', $article->pinterest) }}">
            </div>

            <div class="mb-3">
                <label>Twitter/X Link</label>
                <input type="url" name="twitter" class="form-control"
                       value="{{ old('twitter', $article->twitter) }}">
            </div>

            <div class="mb-3">
                <label>Website Link</label>
                <input type="url" name="website" class="form-control"
                       value="{{ old('website', $article->website) }}">
            </div>

            <div class="mb-4">
                <label>Status</label>
                <select name="status" class="form-control">
                    <option value="1" {{ $article->status == 1 ? 'selected' : '' }}>Active</option>
                    <option value="0" {{ $article->status == 0 ? 'selected' : '' }}>Hidden</option>
                </select>
            </div>

            <button class="btn btn-success">Update Article</button>
            <a href="{{ route('admin.articles.index') }}" class="btn btn-secondary">Back</a>
        </form>

    </div>
</div>

@endsection 