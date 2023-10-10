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
            <!-- BOTON PARA INICAR O CERRAR SESION DEPENDIENDO SI HAY UNA SESION ACTIVA -->
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
                our event
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
                    event
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Wedding Party Here ========= -->
<section class="wedding__party pt-120 pb-120">
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                Wedding Party
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="wedding__party__warpper owl-carousel owl-theme">
            <div class="party__items">
                <div class="party__thumb">
                    <img src="assets/img/party/wedding1.jpg" alt="about-image">
                </div>
                <div class="party__content">
                    <h4>
                        <a href="#0">
                            wedding ceremony
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding
                        the perfect person.
                    </p>
                    <a href="#0" class="party__btn">
                        read more
                    </a>
                </div>
            </div>
            <div class="party__items">
                <div class="party__thumb">
                    <img src="assets/img/party/wedding2.jpg" alt="about-image">
                </div>
                <div class="party__content">
                    <h4>
                        <a href="#0">
                            Wedding Registry
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding
                        the perfect person.
                    </p>
                    <a href="#0" class="party__btn">
                        read more
                    </a>
                </div>
            </div>
            <div class="party__items">
                <div class="party__thumb">
                    <img src="assets/img/party/wedding3.jpg" alt="about-image">
                </div>
                <div class="party__content">
                    <h4>
                        <a href="#0">
                            Wedding cake
                        </a>
                    </h4>
                    <p>
                        It means so much to witness the joy of your wedding day. Congratulations to you both on finding
                        the perfect person.
                    </p>
                    <a href="#0" class="party__btn">
                        read more
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Wedding Party End ========= -->

<!--=========== Member Section Here ========= -->
<section class="member__wedding__section pb-120">
    <div class="shape__one">
        <img src="assets/img/member/left-shape.png" alt="left__shape">
    </div>
    <div class="wedding__section pt-120">
        <div class="shape__two">
            <img src="assets/img/member/rightt-shape.png" alt="left__shape">
        </div>
        <div class="container">
            <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
                <h2 class="section__title">
                    Wedding Info
                </h2>
                <img src="assets/img/tittle/flower.png" alt="flower__tittle">
            </div>
            <div class="row g-4">
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="7s">
                    <div class="wedding__items">
                        <div class="thumb">
                            <img src="assets/img/wedding/wedding1.jpg" alt="team-img">
                        </div>
                        <div class="content__cover">
                            <div class="wedding__content">
                                <h3>
                                    The reception
                                </h3>
                                <div class="date">
                                    <h6>Saturday, 15, 2023</h6>
                                    <h6>2.00 pm - 10.00 pm</h6>
                                </div>
                                <div class="date__two">
                                    <h6>
                                        203 Fake St. Mountain View,
                                    </h6>
                                    <h6>
                                        San Francisco, California, USA
                                    </h6>
                                </div>
                                <h4>
                                    +16102458646
                                </h4>
                                <div class="wedding__button">
                                    <a href="#0" class="cmn--btn">
                                        see map
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-duration="5s">
                    <div class="wedding__items active__items">
                        <div class="thumb">
                            <img src="assets/img/wedding/wedding2.jpg" alt="team-img">
                        </div>
                        <div class="content__cover">
                            <div class="wedding__content">
                                <h3>
                                    The dining time
                                </h3>
                                <div class="date">
                                    <h6>Saturday, 15, 2023</h6>
                                    <h6>2.00 pm - 10.00 pm</h6>
                                </div>
                                <div class="date__two">
                                    <h6>
                                        203 Fake St. Mountain View,
                                    </h6>
                                    <h6>
                                        San Francisco, California, USA
                                    </h6>
                                </div>
                                <h4>
                                    +16102458646
                                </h4>
                                <div class="wedding__button">
                                    <a href="#0" class="cmn--btn">
                                        see map
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 wow fadeInDown" data-wow-duration="2s">
                    <div class="wedding__items">
                        <div class="thumb">
                            <img src="assets/img/wedding/wedding3.jpg" alt="team-img">
                        </div>
                        <div class="content__cover">
                            <div class="wedding__content">
                                <h3>
                                    The wedding party
                                </h3>
                                <div class="date">
                                    <h6>Saturday, 15, 2023</h6>
                                    <h6>2.00 pm - 10.00 pm</h6>
                                </div>
                                <div class="date__two">
                                    <h6>
                                        203 Fake St. Mountain View,
                                    </h6>
                                    <h6>
                                        San Francisco, California, USA
                                    </h6>
                                </div>
                                <h4>
                                    +16102458646
                                </h4>
                                <div class="wedding__button">
                                    <a href="#0" class="cmn--btn">
                                        see map
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Member Section End ========= -->

<!--=========== Attending Section Here ========= -->
<section class="attending__section pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="attending__items">
                    <div class="attending__content center">
                        <h2>
                            Are You Attending?
                        </h2>
                        <h6>
                            Please reserve before June 19th, 2015. Lorem ipsum dolor sit amet, consectetur adipiscing
                        </h6>
                        <a href="#0" class="cmn--btn mt-4">
                            RSVP
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Attending Section End ========= -->