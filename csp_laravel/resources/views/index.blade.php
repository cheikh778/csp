<x-head-assets :title="'Complexe Scolaire la Persévérance'" />

<x-navbar />
<!-- Accueil avec Swiper.js -->
<header id="header-carousel" class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('{{ asset('storage/img/img1.jpeg') }}');">
            <div class="carousel-caption">
                <h1 data-aos="fade-up">Éthique</h1>
                <p data-aos="fade-up" data-aos-delay="200">Nous inculquons à nos étudiants des principes éthiques solides...</p>
            </div>
        </div>
        <div class="swiper-slide" style="background-image: url('{{ asset('storage/img/img1.jpeg') }}');">
            <div class="carousel-caption">
                <h1 data-aos="fade-up">Excellence</h1>
                <p data-aos="fade-up" data-aos-delay="200">Nous visons l'excellence dans tout ce que nous entreprenons...</p>
            </div>
        </div>
        <div class="swiper-slide" style="background-image: url('{{ asset('storage/img/img1.jpeg') }}');">
            <div class="carousel-caption">
                <h1 data-aos="fade-up">Équité</h1>
                <p data-aos="fade-up" data-aos-delay="200">Nous nous engageons à traiter chaque étudiant avec équité...</p>
            </div>
        </div>
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</header>

<!-- À propos -->
<section id="about" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">À propos de CSP</h2>
        <div class="row align-items-center mb-5">
            <div class="col-md-6" data-aos="fade-right">
                <img src="{{ asset('storage/img/about.jpg') }}" class="img-fluid rounded shadow-sm" alt="À propos de CSP">
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <p>
                    <span style="color: #174fdd;font-weight: bold;">Autorisation N°0001592 du 18 Janvier 2024 CSP - Complexe Scolaire la Persévérance</span>
                     est un établissement éducatif de renom dédié à l'excellence académique...
                </p>
            </div>
        </div>
        <div class="row align-items-center">
            <h3 class="text-center mb-4" data-aos="fade-up">Renseignements</h3>
            <div class="col-md-6" data-aos="fade-right">
                <video width="100%" height="auto" controls>
                    <source src="{{ asset('storage/img/presentation.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-6" data-aos="fade-left">
                <img src="{{ asset('storage/img/insc.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Image complémentaire">
            </div>
        </div>
    </div>
</section>

<!-- Services -->
<section id="services" class="py-5 text-white bg-primary" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Nos Services</h2>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="card service-card text-center shadow-sm" data-aos="zoom-in">
                    <div class="card-body">
                        <i class="fas fa-graduation-cap fa-3x mb-3"></i>
                        <h5 class="card-title">Éducation de Qualité</h5>
                        <p class="card-text">Nous offrons une éducation rigoureuse et de haute qualité...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card text-center shadow-sm" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card-body">
                        <i class="fas fa-chalkboard-teacher fa-3x mb-3"></i>
                        <h5 class="card-title">Développement personnel</h5>
                        <p class="card-text">Nous aidons nos étudiants à renforcer leur estime de soi...</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card text-center shadow-sm" data-aos="zoom-in" data-aos-delay="400">
                    <div class="card-body">
                        <i class="fas fa-laptop-code fa-3x mb-3"></i>
                        <h5 class="card-title">Cours de renforcement</h5>
                        <p class="card-text">Nous proposons des cours de soutien pour aider les étudiants...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Témoignages -->
<section id="testimonials" class="py-5" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Témoignages</h2>
        <div class="swiper-container testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                    <img src="{{ asset('storage/img/cheikh.jpeg') }}" class="rounded-circle mb-3" alt="Étudiant 1">
                    <p class="testimonial-text">"CSP m'a donné les outils pour réussir. Je recommande vivement cette école..."</p>
                    <h5>- Serigne Cheikh NDAO</h5>
                </div>
                <div class="swiper-slide text-center">
                    <img src="{{ asset('storage/img/magui.jpg') }}" class="rounded-circle mb-3" alt="Étudiant 2">
                    <p class="testimonial-text">"Les enseignants sont très compétents et dévoués. J'ai appris énormément à CSP..."</p>
                    <h5>- Madjiguene DIOP</h5>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next testimonial-next"></div>
            <div class="swiper-button-prev testimonial-prev"></div>
        </div>
    </div>
</section>

<!-- Galerie -->
<section id="gallery" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Galerie</h2>
        <div class="swiper-container gallery-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('storage/img/g1.jpeg') }}" class="img-fluid gallery-img" alt="Gallery Image 1">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('storage/img/g2.jpeg') }}" class="img-fluid gallery-img" alt="Gallery Image 2">
                </div>
                <!-- Ajoutez d'autres images ici -->
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next gallery-next"></div>
            <div class="swiper-button-prev gallery-prev"></div>
        </div>
    </div>
</section>

<!-- Partenaires -->
<section id="partners" class="py-5 bg-dark text-white" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center mb-4">Nos Partenaires</h2>
        <div class="swiper-container partners-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide text-center">
                    <img src="{{ asset('storage/img/logo.png') }}" alt="Partenaire 1" class="img-fluid partner-logo">
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next partners-next"></div>
            <div class="swiper-button-prev partners-prev"></div>
        </div>
    </div>
</section>

<!-- Contact -->
<section id="contact" class="py-5 bg-light" data-aos="fade-up">
    <div class="container">
        <h2 class="text-center">Contactez-nous</h2>
        <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('storage/img/Full inbox-rafiki.svg') }}" class="img-fluid rounded shadow-sm" alt="Contactez-nous">
            </div>
            <div class="col-md-6">
                <!-- Formulaire de contact -->
                <form action="process_contact.php" method="POST">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control form-control-lg" id="message" name="message" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg">Envoyer</button>
                </form>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-6">
                <h5>Parcelles Assainies u2</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.0147144992743!2d-17.41897692488895!3d14.768201172951347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10cf1a6ea5079%3A0x858d7340e5409ed3!2s71%20Rue%20PA2%2029!5e0!3m2!1sen!2ssn!4v1723746806626!5m2!1sen!2ssn" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="col-md-6">
                <h5>Fith mith, rue en face porte urgence Dalal jamm</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.922455259509!2d-17.410070424888936!3d14.773397772822799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10c8b4758ff75%3A0xd53d2168748d2393!2sCabinet%20Immo%20Service!5e0!3m2!1sen!2ssn!4v1723746858386!5m2!1sen!2ssn" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<x-footer />

<x-foot-assets />
