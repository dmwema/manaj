@php
$page = 'contact';
@endphp

@extends('layout.main')

@section('content')


    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Contact</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Contact</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
            <div class="container">

                <div class="row">

                    <div class="col-lg-6">

                        <div class="row">
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Notre Adresse</h3>

                                    <p>4661, Av Du commerce, Kinshasa / Gombe <br>République Démocratique du Congo</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Envoyez nous un email</h3>
                                    <p>manajcorporation@gmail.com<br>contact@manajcorporation.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Appelez-nous</h3>
                                    <p>+243 970 510 561<br>+243 816 210 347</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('message.new') }}" method="post" role="form" class="php-email-form2">
                            @csrf
                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                        id="name" placeholder="Votre nom" data-rule="minlen:4"
                                        data-msg="Entrez au moins 4 carractères" />
                                    @if ($errors->has('name'))
                                        <div class="validate">Entrez au moins 4 carractères</div>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group">
                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                                        id="email" placeholder="Votre Adresse Email" data-rule="email"
                                        data-msg="Entrez un adresse email valide" />
                                    @if ($errors->has('email'))
                                        <div class="validate">Entrez un adresse email valide</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" value="{{ old('subject') }}"
                                    id="subject" placeholder="Sujet" data-rule="minlen:4"
                                    data-msg="Entrez au moins 8 carractères" />
                                @if ($errors->has('subject'))
                                    <div class="validate">Entrez au moins 8 carractères</div>
                                @endif
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" rows="5" data-rule="required"
                                    data-msg="Ecrivez-nous un message"
                                    placeholder="Message">{{ old('message') }}</textarea>
                                @if ($errors->has('message'))
                                    <div class="validate">Ecrivez-nous un message</div>
                                @endif
                            </div>
                            @if (session()->has('success'))
                                <div class="mb-3">
                                    <div class="error-message"></div>
                                    <div class="sent-message">Votre message a été envoyé. Merci!</div>
                                </div>
                            @endif

                            <div class="text-center"><button type="submit">Envoyer le message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <!-- ======= Map Section ======= -->
        <section class="map mt-2">
            <div class="container-fluid p-0">
                <iframe
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJ_w8oa_YzahoRHeF4hZGggGc&key=AIzaSyB8LitzSMbPrgjn8HYsxDgpCDYlWTOGXQ4"
                    frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
        </section><!-- End Map Section -->

    </main><!-- End #main -->


@endsection
