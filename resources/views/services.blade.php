@php
$page = 'services';
@endphp

@extends('layout.main')

@section('content')

    <main id="main">

        <!-- ======= Our Services Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Nos Services</h2>
                    <ol>
                        <li><a href="/">Accueil</a></li>
                        <li>Nos Services</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Our Services Section -->

        <!-- ======= Services Section ======= -->
        <section class="services">

            <div class="container">

                <div class="row">
                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="icon-box icon-box-pink">

                            <div class="icon"><i class="icofont-building"></i></div>
                            <h4 class="title"><a href="">construction Résidentielle</a></h4>
                            <p class="description">
                                Notre société propose à ses
                                clients la mise en œuvre de son
                                expertise et de ses compétences
                                en génie civil pour la réalisation
                                de tous vos projets.
                            </p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon-box icon-box-cyan">
                            <div class="icon"><i class="icofont-light-bulb"></i></div>
                            <h4 class="title"><a href="">Electricité Industrielle</a></h4>
                            <p class="description">L'entreprise effectue tous types
                                de travaux d'électricité générale pour les professionnels et les particuliers, au
                                quotidien.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-green">
                            <div class="icon"><i class="icofont-battery-half"></i></div>
                            <h4 class="title"><a href="">Système Solaire</a></h4>
                            <p class="description">MANAJ Corporation est aussi spécialisée dans les énergies
                                renouvelables depuis son
                                installation.</p>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon-box icon-box-blue">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4 class="title"><a href="">Froid & Climatisation</a></h4>
                            <p class="description">
                                Nous sommes spécialisés dans l'installation, la maintenance, le dépannage et
                                l'entretien de systèmes frigorifiques et de climatisation.</p>
                        </div>
                    </div>

                    <div class="row"
                        style="text-align: center; width: 100%; display: flex;align-items: center; justify-content: center; margin-top: 20px;">
                        <a href="#" class="btn_call_to_act animate__animated animate__fadeInUp" data-toggle="modal"
                            data-target="#exampleModal">Demander un service</a>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Why Us Section ======= -->
        <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 video-box">
                        <img src="assets/img/whyus.jpg" class="img-fluid" alt="">
                        <a href="#" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">Notre image</a></h4>
                            <p class="description">Notre professionnalisme, notre innovation, une politique de
                                diversification des
                                clients, des marchés et des métiers. Nos valeurs de qualité, de respect des
                                coûts et des délais, nous ont assuré une notoriété forte.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">Liens dans le milieu de travail</a></h4>
                            <p class="description">Nos chantiers sont faits d’échange, de partage, d’écoute, de respect,
                                de
                                réactivité et de paroles tenues.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Why Us Section -->


        <!-- ======= Service Details Section ======= -->
        <section class="service-details">
            <div class="container">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Notre Mission</a></h5>
                                <p class="card-text">La mission de MANAJ Corporation est de mener à terme des projets (de
                                    construction et autres) de toutes envergures. La profitabilité de l’entreprise ainsi que
                                    la pleine satisfaction des exigences des clients découlent d’une organisation
                                    stratégique des équipes de travail selon leurs aptitudes et expertises. Nous sommes
                                    appelés à faire des propositions des différents projets (dans le secteur cible) de
                                    manière ingénieuse, susceptibles à résoudre des quelconques problèmes dans la société.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-2.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Notre Vision</a></h5>
                                <p class="card-text">Nous souhaitons assurer la pérennité de l’entreprise, non seulement par
                                    nos différents services et travaux (de construction et autres) par notre sens de
                                    coopération, mais aussi en nous positionnant comme influent dans le domaine de la
                                    sécurité et professionnalisme au travail ainsi en maintenant notre implication dans
                                    notre communauté. En outre, L’idéale est de porter tout agent collaborateur de
                                    l’entreprise d’une vision managériale et d’une compétence viable qui permettront une
                                    bonne coopération avec nos partenaires dans le respect absolu d’engagement ainsi que
                                    dans un cadre de service de qualité pour le bien et la bonne réputation de l’entreprise.

                                </p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Service Details Section -->

    </main><!-- End #main -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Demander un service</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('demande') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="firstname">Prénom</label>
                                <input type="text" class="form-control" id="firstname" name="firstname"
                                    placeholder="Entrez votre prénom">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                                                                                                                                                                                                                                                             else.</!--small>-->
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="lastname">Nom</label>
                                <input type="text" class="form-control" id="lastname" name="lastname"
                                    placeholder="Entrez votre nom">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                                                                                                                                                                                                                                                             else.</!--small>-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label for="lastname">Vous êtes</label>
                                <select class="custom-select" name="status">
                                    <option value="entreprise">Une entréprise</option>
                                    <option value="individu">Un individu</option>
                                </select>
                            </div>
                            <div class="form-group col-sm-6">
                                <label for="entr">Nom de l'entréprise (optionnel)</label>
                                <input type="text" name="entreprise" class="form-control" id="entr"
                                    placeholder="Nom de l'entréprise">
                                <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                                                                                                                                                                                                                                                         else.</!--small>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="type">Quel catégorie de service voulez vous?</label>
                            <select class="custom-select" name="type" id="type">
                                <option value="entreprise">construction Résidentielle</option>
                                <option value="entreprise">Electricité Industrielle</option>
                                <option value="entreprise">Système Solaire</option>
                                <option value="entreprise">Froid et Climatisation</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="desc">Décrivez le projet</label>
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Envoyer la demande</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
