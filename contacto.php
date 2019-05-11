<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Advanced Store / Contacto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" href="Css/main.css">

    <link href="Media/icono_imaguen/icono_paguina.png" rel="shortcut icon" type="image/png"/>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style type="text/css">
      html, body {
        margin: 0;
        padding: 0;
      }

      * {
        box-sizing: border-box;
      }

      .slider {
        display: block;
          width: 200%;
          margin: 0 auto;
          margin-top: 60px;
      }

      .slick-slide {
        margin: 0px 20px;
      }

      .slick-slide img {
        width: 100%;
        position: static;
      }
      .slick-prev{
        left: 10px;
      }
      .slick-next{
        left: 45%;
      }
      .slick-arrow{

        top: 10%;
      }
      .slick-prev:before,
      .slick-next:before {
        color: black;
      }
      .slick-slide {
        transition: all ease-in-out .3s;
      }
      section{
        min-height: 600px;
        align-content: center;
      }
      section .presentacionNormal{
        width: 50%;
        height: auto;
        margin: 0 auto;
        margin-top: 5%;
        -webkit-box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
        -moz-box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
        box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
      }
      section .presentacionNormal p{
        font-size: 14pt;
        font-family: 'Roboto', sans-serif;
        text-align: left;
        padding: 5%;
      }
      section .presentacion_2{
        width: 95%;
        height: 400px;
        margin-top: 5%;
        -webkit-box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
        -moz-box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
        box-shadow: 6px 6px 41px -2px rgba(0,0,0,0.75);
      }
      section h5{
        width: 100%;
        font-size: 17pt;
        margin: 0 auto;
        padding-top: 30px;
        text-align: center;
      }
      footer{
        margin-top: 5%;
      }
      @media (max-width: 425px) {
        section .presentacionNormal{
          width: 75%;
        }
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e1381c;">
      <a class="navbar-brand text-white" href="#">
        <img src="Media/icono_imaguen/logo_imaguen2.png" height="30" class="d-inline-block align-top bg-light rounded" alt="" style="padding-left: 4px; padding-right: 2px;">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto border-primary justify-content-center">
          <li class="nav-item">
            <a class="nav-link text-white text-center" href="index.php">Inicio<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-center" href="nosotros.php">Nosotros</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-center" href="#">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white text-center" href="beta.php">Beta</a>
          </li>
           <script type="text/javascript">
             $('.dropdown-toggle').dropdown()
           </script>
        </ul>
        <ul class="navbar-nav justify-content-end">
          <script type="text/javascript">
            $('.dropdown-toggle').dropdown()
          </script>
        </ul>
    </nav>
    <section class="container">
        <h5>¿quieres contactarnos?</h5>
        <div class="presentacionNormal bg-white border-white rounded">
          <p>en caso de queres contactarnos por cualquier incoveninte, o para cualquier otra cosa. te dejamos una casilla abajo donde podras contactarnos.</p>
          <form class="needs-validation container" novalidate style="width: 90%; padding-bottom: 30px;">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationTooltip01">E-mail</label>
                <input type="email" class="form-control" id="validationTooltip01" placeholder="exemple@mail.com" name="nombre" value="" id="nombre" required>
                <div class="valid-tooltip">
                  completado!!
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationTooltip01">Mensaje</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="mensaje" rows="3" name="mensaje"></textarea>
                <div class="valid-tooltip">
                  completado!!
                </div>
              </div>
            </div>
            <button class="btn btn-primary" onclick="contacto()">Submit form</button>
          </form>
          <script>
          // Example starter JavaScript for disabling form submissions if there are invalid fields
          (function() {
            'use strict';
            window.addEventListener('load', function() {
              // Fetch all the forms we want to apply custom Bootstrap validation styles to
              var forms = document.getElementsByClassName('needs-validation');
              // Loop over them and prevent submission
              var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                  if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                  }
                  form.classList.add('was-validated');
                }, false);
              });
            }, false);
          })();
          </script>
          <script type="text/javascript">
            function contacto(){
              var e-mail = document.getElementById('email').value;
              var destino = document.getElementById('destino').value;
              var mensaje = document.getElementById('mensaje').value;

              alert(e-mail+" "+destino+" "+mensaje);
              /*$.ajax({
                  type: "post",
                  url: url,
                  data: {idCarrito:id},
                  success: function(){
                   $("#funciones").load(" #funciones2");
                  }
              })*/
            }
          </script>
        </div>
    </section>
    <footer class="footer bg-light" style="width: 100%; overflow: hidden; height: 300px;">
      <div class="container bg-light row" style="height: auto;">
        <div class="bg-transparent col-sm">
          <p class="bg-transparent"><strong class="text-muted">Productos</strong></p>
          <p class="bg-transparent"><a class="text-muted" href="">Componentes</a></p>
          <p class="bg-transparent"><a class="text-muted" href="">Audio</a></p>
          <p class="bg-transparent"><a class="text-muted" href="">Gaming</a></p>
        </div>
        <div class="bg-transparent col-sm">
          <p class="text-muted bg-transparent"><strong class="text-muted">Informacion</strong></p>
          <p class="bg-transparent"><a class="text-muted" href="nosotros.php">Nosotros</a></p>
          <p class="bg-transparent"><a class="text-muted" href="">Desarrollador</a></p>
        </div>
        <div class="bg-transparent col-sm">
          <p class="text-muted bg-transparent"><strong class="text-muted">Legal</strong></p>
          <p class="bg-transparent"><a class="text-muted" href="copyright.php">Copyright</a></p>
          <p class="bg-transparent"><a class="text-muted" href="politicasCoockies.php">Cookies</a></p>
          <p class="bg-transparent"><a class="text-muted" href="politicasPrivacidad.php">Política de privacidad</a></p>
        </div>
        <div class="bg-transparent col-sm">
          <p class="text-muted bg-transparent"><strong class="text-muted">Redes</strong></p>
          <table>
            <tr>
              <td>
                <a href="https://www.facebook.com/advancedstorenqn/" target="_blank">
                  <img class="col-sm rounded" src="Media/social/facebook.png"  width="50px" alt="">
                </a>
              </td>
              <td>
                <a href="#">
                  <img class="col-sm rounded" src="Media/social/instagram.png" width="50px" alt="">
                </a>
              </td>
              <td>
                <a href="#">
                  <img class="col-sm rounded"src="Media/social/twitter.png" width="50px" alt="">
                </a>
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="text-muted bg-transparent">Iconos diseñados por <a href="http://www.freepik.com/" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.com</a> con licencia <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </footer>
  </body>
</html>