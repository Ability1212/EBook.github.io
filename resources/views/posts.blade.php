@extends('layouts.main')

<body style="background-color: rgb(212, 207, 207)">

    @section('container')

        <div class="row justify-content-end">
            <div class="col-md-5">
                <form action="/posts">

                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif

                    <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Cari Tour.." name="search"
                            value="{{ request('search') }}">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </div>

                </form>
            </div>
        </div>

        <div id="carouselExampleFade" class="carousel slide carousel-fade mb-5 d-block w-80" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/book1 (2).jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>first slide label</h4>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/book1 (3).jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>third slide label</h4>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/img/book1 (1).jpg" class="d-block w-100" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Second slide label</h4>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        @if ($posts->count())
            <h1 class="mb-5"><i class="bi bi-book-half"> Buku Baca</i></h1>

            <div class="container">
                <div class="row">
                    <div class="col-md-3 card border border-5 border-secondary shadow-lg p-3 mb-5 bg-body rounded"
                        style="width: 16rem;">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                href="/posts?category={{ $posts[0]->category->slug }}"
                                class="text-white text-decoration-none">{{ $posts[0]->category->name }}</a></div>
                        @if ($posts[0]->image)
                            <div>
                                <img src="{{ asset('storage/' . $posts[0]->image) }}"
                                    alt="{{ $posts[0]->category->name }}" class="card-img-top">
                            </div>
                        @endif

                        <div class="card-body">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-half"></i>
                            <h5 class="card-title font-monospace mt-3">{{ $posts[0]->title }}</h5>
                            <article class="fs-6 fw-semibold mb-3">{!! $posts[0]->body !!}</article>
                            <p><span class="badge bg-danger text-decoration-none fs-6">Rp. {{ $posts[0]->harga }} </span>
                                <span class="text-secondary fs-6 text-decoration-line-through"> Rp.
                                    {{ $posts[0]->harga_diskon }}</span>
                            </p>
                        </div>
                    </div>

                    @foreach ($posts->skip(1) as $post)
                        <div class="col-md-3">

                            <div class="col-md-3 card border border-5 border-secondary shadow-lg p-3 mb-5 bg-body rounded"
                                style="width: 16rem;">
                                <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)"><a
                                        href="/posts?category={{ $post->category->slug }}"
                                        class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                @if ($post->image)
                                    <img src="{{ asset('storage/' . $post->image) }}"
                                        alt="{{ $post->category->name }}" class="card-img-top">
                                @else
                                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                        class="card-img-top" alt="{{ $post->category->name }}">
                                @endif

                                <div class="card-body">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                        class="bi bi-star-half"></i>
                                    <h5 class="card-title font-monospace mt-3">{{ $post->title }}</h5>
                                    <article class="fs-6 fw-semibold mb-3">{!! $post->body !!}</article>
                                    <p><span class="badge bg-danger text-decoration-none fs-6">Rp. {{ $post->harga }}
                                        </span> <span class="text-secondary fw-semibold fs-6 text-decoration-line-through">
                                            Rp.
                                            {{ $post->harga_diskon }}</span></p>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <p class="text-center fs-3 mb-5">No post found.</p>
        @endif

    @endsection
</body>
