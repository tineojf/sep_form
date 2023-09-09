<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Formulario</title>

  <link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
  <link rel="stylesheet" href="./style/style.css" />
</head>

<body class="bg-light">
  <div class="container">
    <main>
      <div class="py-5">
        <img class="d-block mx-auto mb-4" src="./assets/images/google-forms.png" alt="imagen banner" width="100" />
        <h1 class="text-center">Modelo de Formulario</h1>
        <p class="lead text-center">
          Bienvenidos al formulario de la I.E. "Nuevo Mundo".
        </p>

        <form action="#" method="post">
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu nombre" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Apellido</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Ingresa tu apellido" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="exampleFormControlInput3" placeholder="+51 999 999 999" required />
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput4" class="form-label">Email</label>
            <input type="email" class="form-control" id="exampleFormControlInput4" placeholder="example@gmail.com" required />
          </div>

          <div class="col-12 text-center">
            <button class="btn btn-primary" type="submit">Registrarse</button>
          </div>
        </form>
      </div>
    </main>
  </div>
</body>

</html>