@php
$page = 'home';
@endphp

@extends('layout.main')

@section('content')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex justify-cntent-center align-items-center">
        <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Bienvenu à <span>Manaj Corporation</span></h2>
                    <p class="animate__animated animate__fadeInUp">
                        Vous êtes à la récherche des prestateurs pour vos projets de génie civil, Architecture
                        Intérieur, Electricitéet autres ?
                        <br>Arrêtez de chercher ! <strong>vous êtes au bel endroit</strong>.
                    </p>
                    @include('layout.more_btn')
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Notre vision</h2>
                    <p class="animate__animated animate__fadeInUp">
                        Nous souhaitons assurer la pérennité de l’entreprise, non seulement par nos
                        différents services et travaux (de construction et autres) par notre sens de
                        coopération, mais aussi en nous positionnant comme influent dans le domaine
                        de la sécurité et professionnalisme au travail ainsi en maintenant notre
                        implication dans notre communauté.</p>
                    @include('layout.more_btn')
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    <h2 class="animate__animated animate__fadeInDown">Notre mission</h2>
                    <p class="animate__animated animate__fadeInUp">
                        La mission de MANAJ Corporation est de mener à terme des projets (de
                        construction et autres) de toutes envergures. La profitabilité de l’entreprise ainsi
                        que la pleine satisfaction des exigences des clients découlent d’une
                        organisation stratégique des équipes de travail selon leurs aptitudes et
                        expertises.</p>
                    @include('layout.more_btn')
                </div>
            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Précédant</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        @if (session()->has('success'))
            <div class="container">
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            </div>
        @endif
        <!-- ======= Services Section ======= -->
        <section class="services">

            <div class="container">
                <div class="section-title">
                    <h2>Nos services</h2>
                    <p>
                        Depuis son initiation, MANAJ Corporation s’est taillé une place de choix à titre
                        d’entrepreneur général dans différents secteurs d’activité tels que la
                        construction industrielle, la construction institutionnelle, la construction
                        commerciale et le génie civil.
                    </p>
                </div>

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
                        style="text-align: center; width: 100%; display: flex;align-items: center; justify-content: center;">
                        <a href="/services" class="btn_call_to_act animate__animated animate__fadeInUp">Voir plus</a>
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

        <!-- ======= Features Section ======= -->
        <section class="features">
            <div class="container">

                <div class="section-title">
                    <h2>Pourquoi nous ?</h2>
                    <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit
                        sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias
                        ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-1.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-4">
                        <h3>Nos Certifications et Accreditations</h3>
                        <p class="font-italic">
                            Les principaux objectifs que nous nous sommes fixés dans le cadre de notre politique sont,
                            entre autres, les suivants :
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> Certification d’immatriculation à l’INPP N° : 78819,00.
                            </li>
                            <li><i class="icofont-check"></i> Certification d’immatriculation à la CNSS N° : 1013612900
                            </li>
                            <li><i class="icofont-check"></i> Identification nationale : 01-F4200-N65390X</li>
                            <li><i class="icofont-check"></i> Registre du commerce et du crédit mobilier (RCCM) :
                                CD/KNG/RCCM/20-B-01746</li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-2.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Nos Atouts & nos valeurs</h3>
                        <ul>
                            <li>
                                <i class="icofont-check"></i>
                                Notre image
                                <p>
                                    Notre professionnalisme, notre innovation, une politique de diversification des
                                    clients, des marchés et des métiers. Nos valeurs de qualité, de respect des
                                    coûts et des délais, nous ont assuré une notoriété forte.</p>
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                Satisfaction du client
                                <p>
                                    La satisfaction du client est au centre des décisions prises par le personnel de
                                    gestion et de chantier..</p>
                            </li>
                            <li>
                                <i class="icofont-check"></i>
                                Liens dans le milieu de travail
                                <p>
                                    Nos chantiers sont faits d’échange, de partage, d’écoute, de respect, de réactivité
                                    et de paroles tenues.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5">
                        <img src="assets/img/features-3.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5">
                        <h3>Agilité</h3>
                        <p>Nous trouvons des solutions créatives aux problèmes que nous rencontrons et
                            nous les mettons rapidement en œuvre. Notre structure organisationnelle est
                            alignée avec cette valeur et nous confère une habileté à réagir rapidement
                            et efficacement.</p>
                        <h3>Collaboration</h3>
                        <p>Nos fournisseurs, nos sous-traitants et nos clients sont des partenaires avec qui
                            nous négocions dans un esprit de collaboration.</p>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-5 order-1 order-md-2">
                        <img src="assets/img/features-4.svg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-7 pt-5 order-2 order-md-1">
                        <h3>Politique générale de l'entréprise</h3>
                        <p class="font-italic">
                            Cette politique établit clairement les engagements pris par la direction de
                            MANAJ Corporation et témoigne de l’importance accordée à la satisfaction
                            de notre clientèle.
                        </p>
                        <p>
                            La direction de MANAJ Corporation s'engage :
                        </p>
                        <ul>
                            <li><i class="icofont-check"></i> À offrir les meilleurs moyens et outils aux ouvriers de
                                l'entreprise pour
                                satisfaire nos clients</li>
                            <li><i class="icofont-check"></i> À respecter les délais, les budgets et à satisfaire aux
                                exigences
                                applicables</li>
                            <li><i class="icofont-check"></i> À ce que notre personnel soit créatif, débrouillard,
                                autonome en les
                                informant des exigences des contrats</li>
                            <li><i class="icofont-check"></i> À améliorer en permanence l’organisation et le système de
                                management de la qualité</li>
                        </ul>
                    </div>
                </div>

                <div class="row"
                    style="text-align: center; width: 100%; display: flex;align-items: center; justify-content: center; margin-top: 20px;">
                    <a href="#" class="btn_call_to_act animate__animated animate__fadeInUp" data-toggle="modal"
                        data-target="#exampleModal">Demander un service</a>
                </div>

            </div>
        </section><!-- End Features Section -->

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
