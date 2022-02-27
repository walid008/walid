<!-- section formulaire de contact -->
<section class="hero-section inner-page">
    <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                    <path
                        d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z"
                        id="Path"></path>
                </g>
            </g>
        </svg>

    </div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12">
                <div class="row justify-content-center">
                    <div class="col-md-7 text-center hero-text">
                        <h1 data-aos="fade-up" data-aos-delay="">Contactez-nous</h1>
                        <p class="mb-5" data-aos="fade-up" data-aos-delay="100">Chez {{env('APP_NAME')}}, nous sommes
                            convaincus de nos services et n’attendons plus que vous servir. Contactez-nous donc au plus
                            vite pour que l’on puisse s’occuper de vous.
                            Contactez-nous</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="section">
    <div class="container">
        <div class="row mb-5 align-items-end">
            <div class="col-md-6" data-aos="fade-up">

                <h2>Formulaire de contact</h2>
                <h4>Nous vous répondrons dans les plus brefs délais.</h4>
                <p class="mb-0">Vous avez une question? Une demande particulière? N’hésitez pas à nous contacter !</p>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4 ms-auto order-2" data-aos="fade-up">
                <ul class="list-unstyled">
                    <li class="mb-3">
                        <strong class="d-block mb-1">Adresse</strong>
                        <i class="bi bi-geo-alt-fill fa-3x"></i>
                        <span>Chaussée de Wavre 1255 1160 AUDERGHEM, Belgique</span>
                        
                    </li>
                    <li class="mb-3">
                        <strong class="d-block mb-1">Numéro de téléphone</strong>
                        <i class="bi bi-telephone-fill fa-5x"></i>
                        <span>+32 (02) 356 28 68</span>
                    </li>
                    <li class="mb-3">
                        <strong class="d-block mb-1">E-mail</strong>
                        <i class="bi bi-envelope"></i>
                        <span>info@befacility.be</span>
                    </li>
                </ul>
            </div>

            <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="name">Nom</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                            <label for="name">E-mail</label>
                            <input type="email" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <label for="name">Sujet</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="col-md-12 form-group mt-3">
                            <label for="name">Message</label>
                            <textarea class="form-control" name="message" required></textarea>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="loading">Chargement</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Votre message a bien été envoyé. Nous vous remercions!</div>
                        </div>

                        <div class="col-md-6 form-group ">
                            <input type="submit" class="inputnoborder btn btn-primary d-block w-100"
                                value="Envoyer le message">
                        </div>
                    </div>

                </form>
            </div>

        </div>
    </div>
</section>

<!-- ======= CTA Section ======= -->
<section class="section cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 me-auto text-center text-md-start mb-5 mb-md-0">
                <h2>Starts Publishing Your Apps</h2>
            </div>
            <div class="col-md-5 text-center text-md-end">
                <p><a href="#" class="btn d-inline-flex align-items-center"><i class="bx bxl-apple"></i><span>App
                            store</span></a> <a href="#" class="btn d-inline-flex align-items-center"><i
                            class="bx bxl-play-store"></i><span>Google play</span></a></p>
            </div>
        </div>
    </div>
</section><!-- End CTA Section -->
