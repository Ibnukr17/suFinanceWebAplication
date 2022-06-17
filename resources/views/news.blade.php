<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@section('title', 'News')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')
    <style>
        h3 {
            font-family: 'Poppins', sans-serif;
            ;
        }

        p {
            font-family: 'Poppins', sans-serif;
            ;
        }

        .img-fluid {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
    </style>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/2.jpg') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/1.jpg') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/2.png') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/3.jpg') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/4.jpg') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
            <div class="col-sm-4">
                <h3>Article Headline</h3>
                <img class="img-fluid" src="{{ asset('images/5.jpg') }}" alt="images" width="200" height="400">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
                <p style="text-align:right"><a href="#" class="button_small white">Continue Reading &raquo;</a></p>
            </div>
        </div>
    </div>
@endsection
