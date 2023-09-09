<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>

  <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/style.css" />
</head>

<body class="bg-light">
  <div class="container">
    <main>
      <div class="py-5">
        <img class="d-block mx-auto mb-4" src="./assets/google-forms.png" alt="imagen banner" width="100" />
        <h1 class="text-center">Modelo de Formulario</h1>
        <p class="lead text-center">
          Bienvenidos al formulario de la I.E. "Nuevo Mundo".
        </p>


        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nombre" placeholder="Ingresa tu nombre" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" name="apellido" placeholder="Ingresa tu apellido" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="exampleFormControlInput3" name="telefono" placeholder="+51 999 999 999" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput4" name="email" placeholder="example@gmail.com" required />
          </div>

          <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Registrarse</button>
          </div>
        </form>
      </div>
    </main>
  </div>

  <?php
  require 'vendor/autoload.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $email_user = $_POST["email"];

    $apiKey = "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";

    $sendgrid = new \SendGrid($apiKey);

    $email = new \SendGrid\Mail\Mail();
    $email->setFrom("jean.tineo.personal@gmail.com", "Jean Franco Tineo");
    $email->setSubject("Envio correo proyecto final");
    $email->addTo("Robex-4@hotmail.com", "Nombre del Destinatario");
    $contenidoCorreo = "Los datos que ingresó en el formulario son:\nNombre: $nombre\nApellido: $apellido\nTeléfono: $telefono\nEmail: $email_user";
    $email->addContent("text/plain", $contenidoCorreo);

    try {
      $response = $sendgrid->send($email);
      echo "Correo enviado correctamente";
      print $response->statusCode() . "\n";
      print_r($response->headers());
      print $response->body() . "\n";
    } catch (Exception $e) {
      echo "Error al enviar el correo: {$e->getMessage()}";
    }
  }
  ?>

</body>

</html>