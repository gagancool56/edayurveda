 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
     <div class="container d-flex align-items-center">

         <!-- <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1> -->
         <!-- Uncomment below if you prefer to use an image logo -->
         <a href="<?= base_url() ?>" class="logo me-auto"><img src="<?= asset_url('img/logo.png') ?>" alt="" class="img-fluid"></a>

         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="<?= base_url() ?>">Home</a></li>
                 <li><a class="nav-link scrollto" href="<?= base_url('#about') ?>">About</a></li>
                 <li><a class="nav-link scrollto" href="<?= base_url('#services') ?>">Blogs</a></li>
                 <li><a class="nav-link scrollto" href="<?= base_url('mens-issues') ?>">Mens Issues</a></li>
                 <!-- <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li><a href="#">Drop Down 1</a></li>
                         <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                             <ul>
                                 <li><a href="#">Deep Drop Down 1</a></li>
                                 <li><a href="#">Deep Drop Down 2</a></li>
                                 <li><a href="#">Deep Drop Down 3</a></li>
                                 <li><a href="#">Deep Drop Down 4</a></li>
                                 <li><a href="#">Deep Drop Down 5</a></li>
                             </ul>
                         </li>
                         <li><a href="#">Drop Down 2</a></li>
                         <li><a href="#">Drop Down 3</a></li>
                         <li><a href="#">Drop Down 4</a></li>
                     </ul>
                 </li> -->
                 <li><a class="nav-link scrollto" href="<?= base_url('contact-us') ?>">Contact</a></li>
             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

     </div>
 </header><!-- End Header -->