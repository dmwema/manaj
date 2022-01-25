@php
$page = 'team';
@endphp

@extends('layout.main')

@section('content')

    <main id="main">

        <!-- ======= Our Team Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Notre Equipe</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Notre Equipe</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Team Section -->

        <!-- ======= Team Section ======= -->
        <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">
                @if (count($employes) == 0)
                    <p>Aucun membre enrégistré</p>
                @endif
                <div class="row">
                    @foreach ($employes as $e)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="member">
                                <div class="member-img">
                                    <img src="{{ $e->image }}" class="img-fluid" alt="">
                                    <div class="social">
                                        <a href=""><i class="icofont-twitter"></i></a>
                                        <a href=""><i class="icofont-facebook"></i></a>
                                        <a href=""><i class="icofont-instagram"></i></a>
                                        <a href=""><i class="icofont-linkedin"></i></a>
                                    </div>
                                </div>
                                <div class="member-info">
                                    <h4>{{ $e->names }}</h4>
                                    <span>{{ $e->poste }}</span>
                                    <p>{{ $e->poste }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->


@endsection
