<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

<body style="background-color: rgb(212, 207, 207)">

    @section('container')
        <div class="jumbotron text-center mb-5 mt-5">
            <div style="max-height: 300px; overflow:hidden;" class="text-center">
                <img src="img/{{ $image }}" alt="{{ $name }}" width="500" class="img-top">
            </div>
        </div>

        <h3 class="text-center fw-bold">
            Selamat Datang di EBook disini Terdapat berbagai macam-macam buku mulai dari horor, komik, cerita, dan juga buku
            komputer.
            Dan harganya murah dan sangat terjangkau dijamin Ori!!
        </h3>
    @endsection

</body>
