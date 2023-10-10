
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
               if ($_SESSION['sesionIniciada'] == true) { //SI HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?accion=cerrarSesion">Logout</a>
               <?php
               } else { //SI NO HAY UNA SESION ACTIVA
               ?>
                  <a href="index.php?pagina=login">Login</a>
               <?php
               }
               ?>
            </li>

            <!-- BOTON DE REGISTRARSE O VER REGISTROS DEPENDIENDO SI HAY UNA SESION ACTIVA -->
            <li>
               <?php
               if ($_SESSION['sesionIniciada'] == true) {
               ?>
                  <a href="index.php?pagina=registros">Ver registros</a>
               <?php
               } else {
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

<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            error 404
         </h1>
         <ul class="right__content">
            <li>
               <a href="index.php?pagina=inicio">
                  Home
               </a>
            </li>
            <li>
               <i class="fa-solid fa-chevron-right"></i>
            </li>
            <li>
               404
            </li>
         </ul>
      </div>
   </div>
</section>
<!--==== Scroll-Up Section Here ======= -->
<div class="scroll-up">
   <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div>

<!--=========== ERROR 404 ========= -->
<section class="breadcumd__banner">
   <div class="container">
      <div class="breadcumd__wrapper center">
         <h1 class="left__content">
            error 404
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
               404
            </li>
         </ul>
      </div>
   </div>
</section>

<!--=========== Error Section Here ========= -->
<section class="error__section pt-120 pb-120">
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-7">
            <div class="error__thumb">
               <img src="assets/img/404/404.png" alt="error__image">
            </div>
            <div class="error__content">
               <h3>
                  Oops! Pagina no encontrada!
               </h3>
               <a href="index.php?pagina=registro" class="cmn--btn mt-3">
                  Volver
               </a>
            </div>
         </div>
      </div>
   </div>
</section>