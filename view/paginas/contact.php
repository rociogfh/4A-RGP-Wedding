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
                contact us
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
                    contact
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section End ========= -->

<!--=========== Contact Info Section Here ========= -->
<section class="contact__info pt-120 pb-120">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4">
                <div class="info__items center">
                    <div class="info__icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Office address</h4>
                    <p>Inner Circular Rose Valley Park.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info__items center">
                    <div class="info__icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <h4>Email Address</h4>
                    <p>example@example.com</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="info__items center">
                    <div class="info__icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Phone Number</h4>
                    <p>+123 456 789 888</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=========== Contact Info Section End ========= -->

<!--=========== Contact Info Section ========= -->
<section class="contact__section pt-120 pb-120">
    <div class="container">
        <div class="section__header section__center wow fadeInDown" data-wow-duration="4s">
            <h2 class="section__title">
                have any question?
            </h2>
            <img src="assets/img/tittle/flower.png" alt="flower__tittle">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                <div class="contact__right">
                    <form action="contact.php" id="contact-form" method="POST">
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="form__clt">
                                    <input type="text" name="name" id="name" placeholder="Your Name...">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form__clt">
                                    <input type="text" name="email" id="email" placeholder=" Your Email...">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form__clt">
                                    <input type="text" name="number" id="number" placeholder="Phone Number...">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form__clt__big">
                                    <textarea name="message" id="message" placeholder="Message..."></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="cmn--btn">
                                    send message
                                </button>
                            </div>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="map__section">
    <div class="googpemap">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13004082.928417291!2d-104.65713107818928!3d37.275578278180674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1649599302291!5m2!1sen!2sbd"
            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
</body>
</html>
