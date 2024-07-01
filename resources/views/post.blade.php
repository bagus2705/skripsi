@extends('layout.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                < <h1 class="mb-3">{{ $post->title }}</a></h2>
                    <p>By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post->author->name }} </a> in <a href="/posts?category={{ $post->category->slug }}">
                            {{ $post->category->name }}</a></p>
                    <div class="row">
                        <div class="col-md-8">
                            @if ($post->image)
                                <div style="max-height:350px;overflow:hidden">
                                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                        class="img-fluid mt-3">
                                </div>
                            @else
                                <img src=https://picsum.photos/id/237/1200/400 alt="{{ $post->category->name }}"
                                    class="img-fluid">
                            @endif

                            <article class="my-3 fs-5">
                                {!! $post->body !!}
                            </article>
                        </div>
                        <div class="col-md-4">
                            <div class="author-category-box p-3 border rounded">
                                <p><strong>Author:</strong> <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a></p>
                                <p><strong>Category:</strong> <a href="/posts?category={{ $post->category->slug }}"
                                        class="text-decoration-none">{{ $post->category->name }}</a></p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
