<!DOCTYPE html>
<html lang="ES">

<head>
    <meta charset="utf-8">
    <link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" text="text/css" href="contactocss.css" />
    <link rel="stylesheet" type="text/css" href="fonts.css" />
    <script src="arriba.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous">
    </script>
    <script src="slides.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="icon" href="images/alcae.png" />
    <title>Constructora ALCAE</title>
</head>

<body>
    <section id="contenedor">
        <span id="irarriba" class="icon-arrow-up2"> </span>
        <nav class="menu" style="position:fixed; width:100%;">
            <div class="title">
                <h3>CONSTRUCTORA ALCAE</h3>
            </div>
            <ul>
                <li class="icon-sphere"><a href="contactoeng.php">ENG</a> </li>
                <li><a href="#">Contacto</a> </li>
                <li><a href="proyectos.html">Proyectos</a> </li>
                <li><a href="servicios.html">Servicios</a> </li>
                <li><a href="nosotros.html">Nosotros</a> </li>
                <li><a href="alcae.html">Inicio</a> </li>
            </ul>
        </nav>
        <div class="primario" style="padding-top:30px; text-align:center;padding-bottom:40px;">
            <div style="float:left; width:50%;">


                <img style="padding-top:50px;width:600px; height:400px;" src="images/f2.jpg" />
            </div>
            <div style="float:right; width:50%;">
                <h4 style="color:#610101;font-size:45px;  text-align:center; padding:48px;font-weight: bold;">OFICINA PRINCIPAL</h4>
                <article class="pesita">
                    <p>Dirección: Chihuahua #600 <br />Col. Petrolera<br /><br />Email: info@constructoraalcae.com
                        <br />
                        Teléfono: 21-435-32<br />Celular: (921) 273 2954</p>
                </article>
            </div>
            <div style="clear:both">
                <fix />
            </div>
            <hr style=" margin-top:15px; background-color:#000; height:2px;">
            <div style="float:left; width:50%;">
                <h4 style="color:#610101;font-size:45px;  text-align:center; padding:48px;font-weight: bold;">CONTÁCTANOS</h4>
                <p style="font-size:19px;">Constructora ALCAE se pone a tus ordenes... comunícate <br /> con nosotros, envíanos tu comentario o sugerencía. </p>
                <form style="margin-top:80px;" action="contacto2.php" method="POST">
                    <?php
		 if(isSet($_GET{"error"}))
		 {
			 if($_GET{"error"}==0)
				 {
			 ?>
                    <div class="alert alert-success alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Correo enviado correctamente</strong>
                    </div>
                    <?php
				 }
				  if($_GET{"error"}==1)
				 {
			 ?>
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Error en el envio</strong>
                    </div>
                    <?php
				 }
		  }
		 ?>
                    <div class="items">
                        <span style="font-size:20px;">Asunto (Requerido)</span>
                        <input type="text" name="asunto"  placeholder="Ej:Información de trabajo" required />
                    </div>
                    <div class="items">
                        <span style="font-size:20px;">Inserte email (requerido)</span>
                        <input type="email" name="email" placeholder="Ej:alcae@hotmail.com" required />
                    </div>
                    <div style="margin-bottom:20px;" class="items">
                        <span style="font-size:20px;">Tu mensaje (Requerido)</span>
                        <input type="text" name="mensaje" placeholder="Ej:Buenas tardes.."required />
                    </div>
                    <div style="margin:20px 0px 20px 70px;"class="g-recaptcha" data-sitekey="6LecLaQUAAAAAHyTGF5cNkVOk1sPbhaASKM4Cvvs" data-theme="dark"></div>
                    <div class="button">
                        <input type="submit" />
                    </div>
                </form>
            </div>
            <div style="float:right; width:50%;">
                <h4 style="color:#610101;font-size:45px;  text-align:center; padding:48px;font-weight: bold;">UBICACIÓN</h4>
                <iframe src="https://www.google.com/maps/d/embed?mid=11Kg0ofxkDeKImI8yKym9CVxeapEhac2W" width="640" height="480"></iframe>
            </div>
            <div style="clear:both">
                <fix />
            </div>
        </div>
        <footer style="background-color:#58272d; width:100%; margin-bottom:0px;">
            <div class="footer" style=" width:100%; margin:0px auto; ">
                <h3 style="color:white; display:inline-block;">CONSTRUCTORA ALCAE </h3>
                <p>Tel. (921) 273 2954 / info@constructoraalcae.com</p>

            </div>
        </footer>
    </section>
    <script>
        $(document).ready(function() {

            $('#irarriba').click(function() {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 300);
            });

            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {

                    $('#irarriba').slideDown(300);
                    $("#irarriba").css("display", "block");
                } else {

                    $('#irarriba').slideUp(300);
                    $("#irarriba").css("display", "none");
                }
            });
        });

    </script>
</body>

</html>
