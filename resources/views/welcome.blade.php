<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EEST N°3</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  </head>

<body id="page-top">
  
  <header class="masthead d-flex">
    <div class="overlap-image top">
      <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        
        <a href="#" class="nav-item nav-link active plain su-brand" style="font-size: 25px">EEST N°3</a>

        <button class="navbar-toggler" onclick="ToggleMenu(this)" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbar-collapse-main" aria-expanded="false" aria-label="Toggle navigation">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </button>

          <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <ul class="nav navbar-nav ml-auto" style="font-size: 15px">
              <li><a href="especialidades" class="nav-item nav-link active">Especialidades</a></li>
              <li><a href="#" class="nav-item nav-link active">Olimpiadas</a></li>
              <li><a href="contacto" class="nav-item nav-link active">Contacto</a></li>
              <li><a href="#" class="nav-item nav-link active">Inscripción</a></li>
              <li><a href="acercade" class="nav-item nav-link active">Acerca de</a></li>
              <li><a href="#" class="nav-item nav-link active">Preguntas frecuentes</a></li>
            </ul>
            <ul class="navbar-nav ml-auto" style="font-size: 17px">
              <li><a href="login" class="nav-item nav-link active">Iniciar sesión</a></li>
              <li><a href="register" class="nav-item nav-link active">Registro</a></li>
            </ul>
        </div>
      </nav>
    </div>

  
    <div class="container-fluid text-center my-auto">
      <h1 class="mb-1" id="principal-text" >EEST N°3</h1>
      <h3 class="mb-5" style="color:black;">
        <em>Domingo Faustino Sarmiento</em>
      </h3>
      <div class="overlap-image bottom">
        <div class="theme--choco">
          <p id="splash--scroller">
            <a class="plain" href="#noticias">
              Noticias
            </a>
          </p>
        </div>
      </div>
    </div>
  </header>
  <!--- Header --->
      
       <!-- Start of div noticias -->
       <div class="container" id="noticias">

        <h2 class="section-separator text-center"><b>Noticias</b></h2>
          
          
    
          <div class="row">
    
          
            @foreach($noticias as $noticia)
              <div class="col-xl-3 col-md-6 card-separator">
                <div class="zoom-overlay">
                  <a href="{{ route('products.show',$noticia->id) }}"><img class="card-img-top image-holder" src="{{asset('image/'.$noticia->image)}}" alt=""></a>
                </div>
                <div class="">
                    <h4 class="title-card"><a href="{{ route('products.show',$noticia->id) }}">{{ $noticia->name }}</a></h4>
                    <p class="card-text">{{ $noticia->detail }}</p>
                    <p class="card-text">{{ $noticia->created_at }}</p>
    
                    <div class="link-attached">
                      <a style="text-decoration:underline;" href="{{ route('products.show',$noticia->id) }}">Ver artículo <i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
              </div>
              @endforeach
    
              
              
              
          </div>
          
        </div>
                    <!-- End of Noticias Section -->


                <!-- Start of especialidades section -->
  <section class="bg-darkred text-white mb-0 text-center" id="especialidades">

    <div class="container" id="d2">
        <h1>¿Querés saber sobre nuestras especialidades? <button id="b1" type="button" class="btn btn-lg btn-outline-light button-btm-align">Conocer</button></h1>
    </div>

    <div class="container" id='d1' style="display: none;">
        <div class="row">
            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                    <a href="#">Construcciones</a>
                </div>

            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                <a href="#">Electrónica</a>

            </div>

            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                <a href="#">Informática</a>

            </div>

            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                <a href="#">Electromecánica</a>
            </div>

            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                <a href="#">Química</a>
            </div>

            <div class="col-xs-6 col-sm-12 col-lg-2" style="border-style:ridge;">
                <div class="zoom-overlay">
                    <a href="#"><img class="image-holder" src="images/logo-1.jpg" width="120" height="120" /></a>
                </div>
                <a href="#">Automotores</a>
            </div>
        </div>
    </div>
  </section>
                <!-- End of especialidades section -->


                <!-- Start of section -->
      <section class="bg-darkgreen">
        <div class="container text-center">
          <div class="row">
            <div class="col-xl-3 col-md-6">
              <div class="card-bg-white card-shadow">
                <p>Hoy no se dictarán clases en la técnica 3.</p>
                <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                <span class="text-blue">Rigoberta gutierrez</span>
                <p>19/5/19 20:58</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card-bg-white card-shadow">
                <p>Mañana vendrá el intendente a la escuela.</p>
                <img class="logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                <span class="text-blue">Rigoberta gutierrez</span>
                <p>18/5/19 18:20</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card-bg-white card-shadow">
                <p>Se comenzará a vender los buzos de la escuela un 50% más barato por consecuencia de la cantidad de contribuyentes a cooperadora. Se estima que para la semana que viene ya los buzos tendrán dicho precio.</p>
                <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                <span class="text-blue">Rigoberta gutierrez</span>
                <p>18/5/19 15:41</p>
              </div>
            </div>

            <div class="col-xl-3 col-md-6">
              <div class="card-bg-white card-shadow">
                <p>Hoy no se dictarán clases en la técnica 3.</p>
                <img class="text-left logo-news" src="images/logo-1.jpg" height="30" width="30" alt="Avatar" />
                <span class="text-blue">Rigoberta gutierrez</span>
                <p>17/5/19 20:58</p>
              </div>
            </div>
          </div>
        </div>
      </section>
                <!-- End of section -->


                <!-- Start of Acerca de section -->
      <div class="container-fluid bg-blue">
        <div class="container text-center text-white">
          <h3 class="section-separator">Acerca de nuestra escuela</h3>
          <p>Un lugar para aprender, descubrir, innovar, expresarte y debatir</p>
          <div class="row">
            <div class="col-xl-4">
              <h5>Abierto en <b>1936</b></h5>
            </div>
            <div class="col-xl-4">
              <h5>Estudiantes <b>1.782</b></h5>
            </div>
            <div class="col-xl-4">
              <h5>Especialidades <b>6</b></h5>
            </div>
          </div>
          <div class="separator">
            <button class="btn btn-lg btn-outline-light" type="button" name="button">Más información</button>
          </div>
        </div>
      </div>
              <!-- End of Acerca de section -->

              <!-- Start of olimpiadas -->


              <!-- End of olimpiadas -->

              <!--  Start of visitanos -->

      <div class="container-fluid">
         <div class="row">
           <div class="col-md-6 col-sm-12 nopadding">

            <div id="demo" class="carousel slide" data-ride="carousel">

              <!-- Indicators -->
              <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
              </ul>
              
              <!-- The slideshow -->
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="images/hdImage.jpg" alt="Los Angeles">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>La escuela más grande de Mar Del Plata</h4>
                    <p>Construyendo futuros técnicos</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/macri-dios.jpg" alt="Chicago">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>Con mucha pasión por enseñar</h4>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="images/arroyo.jpeg" alt="New York">
                  <div class="carousel-caption d-none d-md-block">
                    <h4>¡Visitanos!</h4>
                  </div>
                </div>
              </div>
              
              <!-- Left and right controls -->
              <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>
              <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 nopadding">
             <div class="google-maps">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3738.8519850853354!2d-57.566319291805!3d-38.00075829831354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9584deae122e7697%3A0x9e8d9fc9509d9056!2sEscuela+de+Educaci%C3%B3n+Secundaria+T%C3%A9cnica+N.3+Domingo+Faustino+Sarmiento!5e0!3m2!1sen!2sar!4v1559433368397!5m2!1sen!2sar" width="800" height="600" frameborder="0" style="border:0"></iframe>
            </div>            
          </div>
        </div>
      </div>

    <footer id="footer">
      <div class="container">
        <div class="row text-center text-xs-center text-sm-left text-md-left">
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Especialidades</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Automotores</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Construcciones</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Electrónica</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Electrmecánica</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Informática</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Química</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Links útiles</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Consejo escolar</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Mesas de examen</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Módulo de ingreso</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Noticias</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Olimpíadas</a></li>
            </ul>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <h5>Nosotros</h5>
            <ul class="list-unstyled quick-links">
              <li><a href="contacto"><i class="fa fa-angle-double-right"></i>Contactanos</a></li>
              <li><a href="#" title="Design and developed by"><i class="fa fa-angle-double-right"></i>Directivos</a></li>
              <li><a href="acercade"><i class="fa fa-angle-double-right"></i>Historia</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Imágenes</a></li>
              <li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Preguntas frecuentes</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
            <ul class="list-unstyled list-inline social text-center">
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
              <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
            </ul>
          </div>
        </div>	
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
            <p>&copy Todos los derechos reservados </p>
            <!-- <p class="h6">&copy All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p> -->
          </div>
        </div>	
      </div>
    </footer>

        <!-- Scroll to Top Button-->
      <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
        <i class="fa fa-angle-up"></i>
      </a>

      <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

</body>
</html>
