@extends('layouts.main')

<body style="background-color: rgb(212, 207, 207)">

    @section('container')
        <h1 class="mb-5">Category Buku</h1>

        <div class="container">
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-md-3 mb-4">
                        <a href="/posts?category={{ $category->slug }}">
                            <div class="card bg-dark text-white">
                                <img src="/img/foto.jpg" class="card-img" alt="#">
                                <div class="card-img-overlay d-flex align-items-center p-0">
                                    <h5 class="card-title text-center flex-fill p-4 fs-3"
                                        style="background-color: rgba(0,0,0,0.7)">{{ $category->name }}</h5>
                                </div>
                            </div>

                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

</body>
