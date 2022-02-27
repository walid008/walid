
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SoftLand Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <!-- <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet"> -->
  <!-- <script defer src="/your-path-to-fontawesome/js/brands.js"></script>
  <script defer src="/your-path-to-fontawesome/js/solid.js"></script>
  <script defer src="/your-path-to-fontawesome/js/fontawesome.js"></script> -->
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>
<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
/>

<style>
            a {
                color: #777;
                text-decoration: none;
                transition: 0.3s all ease;
                }
</style>

  <!-- Template Main CSS File -->

  <link rel="stylesheet" href="{{asset('css/app.css')}}">

  <!-- =======================================================
  * Template Name: SoftLand - v4.7.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

<div id="invoice">



<div class="invoice overflow-auto">
   
    <div style="min-width: 600px">
        <header>
            <div class="row">
                <div class="col">
                    <!-- image logo  -->
                    
                            <img src="{{ URL::asset('img/befacility.png')}}" data-holder-rendered="true" />
                   
                </div>
               <!-- information du client -->
                <div class="col company-details">
                    <h2 class="name">
                    
                        {{ env('APP_NAME') }}
                      
                    </h2>
                    <div>Chaussée de Wavre 1255 1160 AUDERGHEM</div>
                    <div>+32 (02) 356 28 68</div>
                    <div> info@befacility.be</div>
                </div>
            </div>
        </header>
      
        <!-- BTN ajouts element facture -->
        
       <!-- contact du client -->
        <main>
            <div class="row contacts">
                <div class="col invoice-to">
                    <div class="text-gray-light">Facture de:</div>
        <h2 class="to">{{ $id->nom_societe }}</h2>


        <div class="address">{{ $id->num_tel_societe }}</div>
        <div class="address">{{ $id->adresse_societe }}</div>
        <div class="email"><a href="mailto:{{ $id->email_societe }}">{{ $id->email_societe }}</a></div>
    </div>
    <div class="col invoice-details">
        <h1 class="invoice-id">Facture: 3-2-1</h1>
        <div class="date">Date de facturation: 01/10/2018</div>
        <div class="date">Date due : 30/10/2018</div>
    </div>
</div>

@include('webmaster.factures.factureprix')

<div class="thanks">Merci!</div>
<div class="notices">
    <div>NOTICE:</div>
    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
</div>
</main>
<footer>
Invoice was created on a computer and is valid without the signature and seal.
</footer>
</div>
<!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
<div></div>
</div>
</div>

    
   

<!-- Vendor JS Files -->
<!-- <script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<!-- Template Main JS File -->
<script src="{{asset('js/app.js')}}"></script>

</body>

</html>


