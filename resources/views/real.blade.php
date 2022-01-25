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
                    <h2>Nos réalisations</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Nos réalisations</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Portfolio Section -->

        <!-- ======= Portfolio Section ======= -->
        <section class="portfolio">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">Tous</li>
                            @foreach ($categories as $c)
                                <li data-filter=".filter-{{ $c->id }}">{{ $c->name }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @if (count($realisations) == 0)
                    <p>Aucune réalisation enrégistrée</p>
                @endif

                <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                    data-aos-duration="500">
                    @foreach ($realisations as $r)
                        <div class="col-lg-4 col-md-6 filter-app">
                            <div class="portfolio-item">
                                <img src="{{ $r->image1 }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h3><a href="{{ $r->image1 }}" data-gall="portfolioGallery" class="venobox"
                                            title="{{ $r->title }}">{{ $r->title }}</a></h3>
                                    <div>
                                        <a href="{{ $r->image1 }}" data-gall="portfolioGallery" class="venobox"
                                            title="{{ $r->title }}"><i class="bx bx-plus"></i></a>
                                        <a href="{{ route('realisation-detail', ['id' => $r->id]) }}" title="Details"><i
                                                class="bx bx-link"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->


@endsection
