 <!-- ======= Hero Section ======= -->
 <section class="hero-section" id="hero">

     <div class="wave">

         <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink">
             <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                 <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
                     <path
                         d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z"
                         id="Path"></path>
                 </g>
             </g>
         </svg>

     </div>

     <div class="container ">
         <div class="row align-items-center">
             <div class="col-12 hero-text-image">
                 <div class="row">
                     <div class="col-lg-8 text-center text-lg-start">
                         <h1 data-aos="fade-right">Service de voiture avec chauffeur</h1>
                         <p class="mb-5" data-aos="fade-right" data-aos-delay="100">Déplacez vous en toute sécurité avec {{env('APP_NAME')}}</p>
                         <p data-aos="fade-right" data-aos-delay="200" data-aos-offset="-500">
                            </p>
                     </div>
                     <div class="col-lg-4 iphone-wrap booking-form" data-aos="fade-right">
                         <!-- <img src="img/phone_1.png" alt="Image" class="phone-1" data-aos="fade-right">
                         <img src="img/phone_2.png" alt="Image" class="phone-2" data-aos="fade-right"
                             data-aos-delay="200"> -->

                             <form class="p-3 mb-5 bg-white " action="{{ route('formulaireDeReservation') }}" method="post">
                                 @csrf
                                 <strong><h2>Commandez une</h2></strong>
                                 <strong><h2>course</h2></strong>
                                 <div class="form-group">
                                     <span class="form-label">Nom</span>
                                     <input class="form-control"  type="text" name="depart"
                                         placeholder="Entrer le lieu de prise en charge">
                                 </div>
                                 <div class="row">
                                     <div class="form-group">
                                         <span class="form-label">Prénom</span>
                                         <input class="form-control" type="text" name="arrivee"
                                             placeholder="Indiquez votre destination">
                                     </div>
                                 </div>

                                 <div class="form-btn">
                                     <button class="submit-btn" type="submit" >Commandez maintenant</button>
                                 </div>
                             </form>
                        



                         <!-- <div class="card phone-1 aos-init aos-animate" style="width: 18rem;" data-mdb-animation="fade-in-right">
                             <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                 <p class="card-text">Some quick example text to build on the card title and make up the
                                     bulk of the card's content.</p>
                                 <a href="#" class="card-link">Card link</a>
                                 <a href="#" class="card-link">Another link</a>
                             </div>
                         </div>
                         <div class="card phone-2 aos-init aos-animate" style="width: 18rem;" data-aos="fade-right">
                             <div class="card-body">
                                 <h5 class="card-title">Card title</h5>
                                 <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                                 <p class="card-text">Some quick example text to build on the card title and make up the
                                     bulk of the card's content.</p>
                                 <a href="#" class="card-link">Card link</a>
                                 <a href="#" class="card-link">Another link</a>
                             </div>
                         </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- End Hero -->
