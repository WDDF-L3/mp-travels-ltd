@extends('admin.layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-4">
    <h2>Articles</h2>
    <a href="{{ route('admin.articles.create') }}" class="btn btn-primary">
        Add Article
    </a>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="card border-0 shadow-sm">
    <div class="card-body table-responsive">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Status</th>
                    <th width="170">Action</th>
                </tr>
            </thead>

            <tbody>
                @forelse($articles as $key => $article)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category }}</td>
                        <td>{{ $article->author }}</td>
                        <td>
                            @if($article->status)
                                <span class="badge bg-success">Active</span>
                            @else
                                <span class="badge bg-danger">Hidden</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('admin.articles.edit', $article->id) }}"
                               class="btn btn-sm btn-warning">
                                Edit
                            </a>

                            <form action="{{ route('admin.articles.destroy', $article->id) }}"
                                  method="POST"
                                  class="d-inline"
                                  onsubmit="return confirm('Delete this article?')">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No articles found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection