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
                our blog
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
                    blog
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Breadcumd Section Here ========= -->

<!--=========== Blog Section Here ========= -->
<section class="blog__section pt-120 pb-120">
    <div class="left__shape">
        <img src="assets/img/testi/shape-left.png" alt="left__shape">
    </div>
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">top 10 gifts</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog2.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Best Photography Idea</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog3.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Wedding Flower Collect</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">top 10 gifts</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog2.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Best Photography Idea</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog3.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Wedding Flower Collect</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog1.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">top 10 gifts</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog2.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Best Photography Idea</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="blog__items">
                    <div class="blog__thumb">
                        <img src="assets/img/blog/blog3.jpg" alt="blog__image">
                    </div>
                    <div class="blog__content">
                        <h4>
                            <a href="blog-single.html">Wedding Flower Collect</a>
                        </h4>
                        <p>
                            The tradition is based on an Old English rhyme that dates back to 19th-century Lancashire.It
                            describes the items a bride should have on her wedding day.
                        </p>
                        <div class="blog-button mt-2">
                            <a href="blog-single.html" class="blog-btn">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="default-pagination">
                <li class="active-one">
                    <a href="#"><i class="fa-solid fa-angle-left"></i></a>
                </li>
                <li class="active">
                    <a href="#">1</a>
                </li>
                <li>
                    <a href="#">2</a>
                </li>
                <li class="active-one">
                    <a href="#">3</a>
                </li>
                <li>
                    <a href="#">4</a>
                </li>
                <li>
                    <a href="#">5</a>
                </li>
                <li class="active-two">
                    <a href="#"><i class="fa-solid fa-angle-right"></i></a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--=========== Blog Section End ========= -->