@extends('layouts.app')

@section('content')

<section class="article-details-banner">
    <div class="container text-center">
        <h1>{{ $article->title }}</h1>
        <p>Home » Articles » {{ $article->title }}</p>
    </div>
</section>

<section class="article-details-section">
    <div class="container">

        <div class="row g-5">

            <div class="col-lg-8">
                <div class="article-details-card">

                    <h2>{{ $article->title }}</h2>

                    <div class="article-details-image">
                        <img src="{{ asset('uploads/articles/' . $article->image) }}" alt="{{ $article->title }}" class="img-fluid">
                    </div>

                    <div class="article-details-meta">
                        <span><i class="fa-solid fa-user"></i> {{ $article->author }}</span>
                        <span><i class="fa-solid fa-folder"></i> {{ $article->category }}</span>
                        <span><i class="fa-solid fa-calendar-days"></i> {{ $article->created_at->format('d M Y') }}</span>
                    </div>

                    

                    <p>
                        {!! nl2br(e($article->description)) !!}
                    </p>

                    <div class="article-share mt-4">
                        <h5>Share This Article</h5>

                        @if($article->facebook)
                            <a href="{{ $article->facebook }}" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        @endif

                        @if($article->instagram)
                            <a href="{{ $article->instagram }}" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                        @endif

                        @if($article->pinterest)
                            <a href="{{ $article->pinterest }}" target="_blank"><i class="fa-brands fa-pinterest-p"></i></a>
                        @endif

                        @if($article->twitter)
                            <a href="{{ $article->twitter }}" target="_blank"><i class="fa-brands fa-x-twitter"></i></a>
                        @endif

                        @if($article->website)
                            <a href="{{ $article->website }}" target="_blank"><i class="fa-solid fa-globe"></i></a>
                        @endif
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="latest-article-sidebar">
                    <h3>Latest Articles</h3>

                    @forelse($latestArticles as $latest)
                        <a href="{{ route('articles.show', $latest->slug) }}" class="latest-article-item">
                            <span>{{ $latest->created_at->format('d M Y') }}</span>
                            <strong>{{ $latest->title }}</strong>
                        </a>
                    @empty
                        <p>No latest articles found.</p>
                    @endforelse
                </div>
            </div>

        </div>

    </div>
</section>

@endsection