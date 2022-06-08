
<?php require "./inc/sesion.php"; ?>
<?php require_once 'conexion.php';?>

<!DOCTYPE html>
<html>
    <head>
        <?php include "./inc/head.php"; ?>
    </head>
    <body>
       
<div id="main">
     <div class="container">
         <section >
            <div id="main_slider" class="section carousel slide banner-main" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#main_slider" data-slide-to="0" class="active"></li>
                  <li data-target="#main_slider" data-slide-to="1"></li>
                  <li data-target="#main_slider" data-slide-to="2"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container">
                        <div class="row marginii">
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="carousel-sporrt_text ">
                                 <h1 class="sport_text"><strong>Pc Gamer Santo Domingo<br><span style="color: #fff;">Cycle</span></strong></h1>
                                 <p class="lorem_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content</p>
                                 <button class="boynow_bt" onclick="location.href='login.php'">Ingresar Administrador</button>
                                 <button class="contact_bt" onclick="location.href='login2.php'">Ingresar usuario</button>
                              </div>
                           </div>
                           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <div class="img-box">
                                 <figure><img src="imagenes/esto.jpg" style="max-width: 50%;"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            
         </section>
        
</div>


<footer class="section">
  <div class="container">
    <div class="columns is-multiline" style="border-bottom: 1px solid #dee2e6;">
      <div class="column is-3 mb-5">
        <a class="mb-4 is-inline-block" href="#">
          <img class="image" src="bulma-plain-assets/logos/plainb-logo.svg" alt="" width="96px">
        </a>
        <p class="has-text-grey-dark mb-6">Contactanos.</p>
        <div>
          <a class="mr-3 is-inline-block" href="#">
            <img  src="https://cdn.icon-icons.com/icons2/478/PNG/128/facebook_47004.png" width="40px" height="40px" >
          </a>
          <a class="mr-3 is-inline-block" href="#">
            <img  src="https://play-lh.googleusercontent.com/h9jWMwqb-h9hjP4THqrJ50eIwPekjv7QPmTpA85gFQ10PjV02CoGAcYLLptqd19Sa1iJ" width="40px" height="40px">
          </a>
          <a class="mr-3 is-inline-block" href="#">
            <img  src="data:image/png;base64,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" width="40px" height="40px">
          </a>
        </div>
      </div>
      <div class="column is-9">
        <div class="columns is-multiline">
          <div class="column is-6 is-3-desktop mb-5">
            <h4 class="is-size-4 has-text-weight-bold mb-4">Company</h4>
            <ul>
              <li class="mb-2"><a class="button is-white" href="#">About Us</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Careers</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Press</a></li>
              <li><a class="button is-white" href="#">Blog</a></li>
            </ul>
          </div>
          <div class="column is-6 is-3-desktop mb-5">
            <h4 class="is-size-4 has-text-weight-bold mb-4">Pages</h4>
            <ul>
              <li class="mb-2"><a class="button is-white" href="#">Login</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Register</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Add list</a></li>
              <li><a class="button is-white" href="#">Contact</a></li>
            </ul>
          </div>
          <div class="column is-6 is-3-desktop mb-5">
            <h4 class="is-size-4 has-text-weight-bold mb-4">Legal</h4>
            <ul>
              <li class="mb-2"><a class="button is-white" href="#">Terms</a></li>
              <li class="mb-2"><a class="button is-white" href="#">About Us</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Team</a></li>
              <li><a class="button is-white" href="#">Privacy</a></li>
            </ul>
          </div>
          <div class="column is-6 is-3-desktop mb-5">
            <h4 class="is-size-4 has-text-weight-bold mb-4">Resources</h4>
            <ul>
              <li class="mb-2"><a class="button is-white" href="#">Blog</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Service</a></li>
              <li class="mb-2"><a class="button is-white" href="#">Product</a></li>
              <li><a class="button is-white" href="#">Pricing</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
   <div class="copyright_text">Copyright 2022 Derechos reservodos #Hail Batman.</div>
   
      </div>
     

    </body>
</html>