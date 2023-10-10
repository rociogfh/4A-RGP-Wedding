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
                our Service
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
                    Service
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Service Section Here ========= -->
<section class="service__section pt-120 pb-120">
    <div class="left__shape">
        <img src="assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                service
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/service/service1.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                Photography
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/service/service2.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                reception
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/party/wedding3.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                wedding cake
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/service/service3.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                wedding post
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__service">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/service/service4.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                wedding ring
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="service__items style__two">
                    <div class="service__thumb">
                        <a href="service-single.html">
                            <img src="assets/img/service/service5.jpg" alt="service__image">
                        </a>
                    </div>
                    <div class="service__content">
                        <h4>
                            <a href="service-single.html">
                                wedding dress
                            </a>
                        </h4>
                        <p>
                            It means so much to witness the joy of your wedding day. Congratulations to you both on
                            finding the perfect person.
                        </p>
                        <a href="service-single.html" class="party__btn">
                            read more
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Service Section End ========= -->