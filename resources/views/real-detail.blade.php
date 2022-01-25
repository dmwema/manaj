@php
$page = 'real';
@endphp

@extends('layout.main')

@section('content')

    <main id="main">

        <!-- ======= Our Portfolio Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>{{ $realisation->title }}</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li><a href="/realisations">Réalisations</a></li>
                        <li>{{ $realisation->title }}</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Details Section ======= -->
        <section class="portfolio-details">
            <div class="container">

                <div class="portfolio-details-container">

                    <div class="owl-carousel portfolio-details-carousel">
                        <img src="{{ $realisation->image1 }}" class="img-fluid" alt="">
                        <img src="{{ $realisation->image2 }}" class="img-fluid" alt="">
                        <img src="{{ $realisation->image3 }}" class="img-fluid" alt="">
                    </div>

                    <div class="portfolio-info">
                        <h3>Insformations sur le projet</h3>
                        <ul>
                            <li><strong>Categorie</strong>: {{ $realisation->category }}</li>
                            <li><strong>Client</strong>: {{ $realisation->client }}</li>
                            <li><strong>Date du projet</strong>: {{ $realisation->date }}</li>
                            <li><strong>Durée du projet</strong>: {{ $realisation->durée }}s</li>
                            <!--<li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>-->
                        </ul>
                    </div>

                </div>

                <div class="portfolio-description">
                    <h2>{{ $realisation->title }}</h2>
                    <p>
                        {{ $realisation->desc }}
                    </p>
                </div>
            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->


@endsection
