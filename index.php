<?php include 'k.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css" />
</head>

<body>

    <div class="container pt-5">
        <div class="row mt-5 shadow-lg">
            <div class="col-6 bg-fondo">
                <div class="formulario text-center">
                    <div class="titulo mt-5">
                        <h2>CONTACTO</h2>
                    </div>
                    <div class="contacto mt-4">
                        <form id="form1" method="POST" onsubmit="return enviar();">
                            <input type="text" name="nombre" id="nombre" placeholder="Nombre" />
                            <br> <br>
                            <input type="email" name="correo" id="correo" placeholder="Correo" />
                            <br> <br>
                            <textarea name="msj" id="msj" placeholder="Mensaje"></textarea>
                            <br> <br>
                            <div class="text-center">
                                <div style="display: inline-block;" class="g-recaptcha" id="gwd-reCAPTCHA_2 rc-imageselect" aria-required="Selecciona la casilla" data-sitekey=<?php echo SITE_KEY; ?>></div>
                            </div>
                            <input type="submit" name="submit" value="Enviar" />
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="imagen">
                    <img class="img-fluid" src="/img/verde-cel.jpg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- <div id="res"></div> -->
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/jquery-3-5-1-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>