<?php
error_reporting(0);
session_start();

if($_SESSION['sesionIniciada'] == true){

}
?>

<!--==== Header Section Here ======= -->
<header class="header-section">
   <div class="container">
      <div class="header-wrapper">
         <div class="logo-menu">
            <a href="index.php?pagina=inicio" class="logo">
               <img src="assets/img/logo/logo1.png" alt="img">
            </a>
         </div>
         <div class="header-bar d-lg-none">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <ul class="main-menu">
            
            <li>
               <?php
               error_reporting(0);
               session_start();
               if($_SESSION['sesionIniciada'] == true){ //SI HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?accion=cerrarSesion">Logout</a>
               <?php
               }else{ //SI NO HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?pagina=login">Login</a>
               <?php
               }
               ?>
            </li>

            <!-- BOTON DE REGISTRARSE O VER REGISTROS DEPENDIENDO SI HAY UNA SESION ACTIVA -->
            <li>
               <?php
               if($_SESSION['sesionIniciada'] == true){
               ?>
                  <a href="index.php?pagina=registros">Ver registros</a>
               <?php
               }else{
               ?> 
                  <a href="index.php?pagina=registro">Registrarse</a>
               <?php
               }
               ?>
            </li>
            <li class="active">
               <a href="index.php?pagina=inicio">Home</a>
            </li>
            <li>
               <a href="index.php?pagina=about">About</a>
            </li>
            <li>
               <a href="#0">Service <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=service">
                        <span>Service</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=service-single">
                        <span>Service Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?pagina=story">Our story</a>
            </li>
            <li>
               <a href="#0">Pages <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=event">
                        <span>Our event</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=gallery">
                        <span>Gallery</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=error">
                        <span>Error 404</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="#0">Blog <i class="fas fa-chevron-down"></i></a>
               <ul class="sub-menu">
                  <li class="subtwohober">
                     <a href="index.php?pagina=blog">
                        <span>Blog</span>
                     </a>
                  </li>
                  <li class="subtwohober">
                     <a href="index.php?pagina=blog-single">
                        <span>Blog Single</span>
                     </a>
                  </li>
               </ul>
            </li>
            <li>
               <a href="index.php?pagina=contact">Contact</a>
            </li>
        </ul>
      </div>
   </div>
</header>
<!--==== Header Section End ======= -->
<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
    <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>
<!--==== Scroll-Up Section End ======= -->

<!--=========== Breadcumd Section Here ========= -->
<section class="breadcumd__banner">
    <div class="container">
        <div class="breadcumd__wrapper center">
            <h1 class="left__content">
                our gallery
            </h1>
            <ul class="right__content">
                <li>
                    <a href="index.html">
                        Home
                    </a>
                </li>
                <li>
                    <i class="fa-solid fa-chevron-right"></i>
                </li>
                <li>
                    gallery
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Celebrate Section Here ========= -->
<section class="celebrate__section pb-120 pt-120">
    <div class="flowers__shape">
        <img src="assets/img/celebrate/flower.png" alt="shape__image">
    </div>
    <div class="left__shape">
        <img src="assets/img/celebrate/left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="celebrate__wrapper">
            <div class="border__shape">
                <img src="assets/img/celebrate/shape.png" alt="shape">
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="celebrate__items">
                        <div class="celebrate__thumb">
                            <img src="assets/img/celebrate/celebrate.jpg" alt="celebrate__image">
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6">
                    <div class="celebrate__content center">
                        <h3>
                            Join us to celebrate
                        </h3>
                        <h3>
                            The wedding day of
                        </h3>
                        <h2 class="celebrate__tittle">
                            Shakira & Deniel
                        </h2>
                        <h3 class="sub__tittle">
                            Which is celebration on
                        </h3>
                        <ul class="d-flex">
                            <li>April</li>
                            <li>15</li>
                            <li class="mr-none">2023</li>
                        </ul>
                        <div class="last__text">
                            <h3>
                                Starting at 2:00
                            </h3>
                            <p>
                                In the afternoon
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Celebrate Section End ========= -->

<!--=========== Gallery Section Here ========= -->
<section class="gallery__section pt-120 pb-120">
    <div class="left__shape">
        <img src="assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                Captured Moments
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g1.jpg" class="popup__image">
                        <img src="assets/img/gallery/g1.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g2.jpg" class="popup__image">
                        <img src="assets/img/gallery/g2.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g3.jpg" class="popup__image">
                        <img src="assets/img/gallery/g3.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g4.jpg" class="popup__image">
                        <img src="assets/img/gallery/g4.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g5.jpg" class="popup__image">
                        <img src="assets/img/gallery/g5.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="gallery__thumb">
                    <a href="assets/img/gallery/g6.jpg" class="popup__image">
                        <img src="assets/img/gallery/g6.jpg" alt="gallery__image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Gallery Section End ========= -->