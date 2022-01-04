<!DOCTYPE html>
<html lang="en"> 

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Contacto</title>
  </head>
  <body id="contacto">
    <header> 
      <nav class="navbar navbar-expand-md  mt-2">
            <div class="container">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto mb-2 mb-md-0 mt-2">
                  <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="sobre-mi.php">Sobre mí</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link px-4 py-1" href="proyectos.php">Proyectos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active px-4 py-1" href="contacto.php">Contacto</a>
                  </li>
                </ul>
                <div class="d-inline">
                    <a href="" class="btn btn-rojo">Descargar mi CV <i class="fas fa-download"></i></a>
                </div>
              </div>
            </div>
      </nav>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-12 mt-3 mb-5">
            <h1>Contacto</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-sm-6">
          <p>Te invito a que te contactes enviándome un mensaje o bien por whatsapp.</p>
          </div>
              <div class="col-12 col-sm-6">
                <form action="" method="POST">
                  <div class="pb-3">
                      <input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre" class="form-control shadow">
                  </div>
                  <div class="pb-3">
                      <input type="email" name="txtCorreo" id="txtCorreo" placeholder="Correo" class="form-control shadow">
                  </div>
                  <div class="pb-3">
                      <input type="tel" name="txtTelefono" id="txtTelefono" placeholder="Teléfono/Whatsapp" class="form-control shadow">
                  </div>
                  <div class="pb-3">
                      <textarea name="txtMensaje" id="txtMensaje" placeholder="Escribe aquí tú mensaje" class="form-control shadow"></textarea>
                  </div>
                  <div class="pb-3 float-end float-sm-start">
                      <button type="submit" id="btnEnviar" name="btnEnviar" class="btn-blanco px-4">ENVIAR</button>
                  </div>
                </form>
              </div>
        </div>
    </main>

    <footer class="container fixed-bottom mb-5">
      <div class="row mt-5 pb-3 text-center">
          <div class="col-12 col-sm-3 text-center text-sm-start">
              <a href="https://github.com/fcadani/portfolio.git" target="_blank" title="Github"><i class="fab fa-github"></i></a>
              <a href="https://www.linkedin.com/in/angel-daniel-flores-cata-863a4617b/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="col-12 col-sm-3 text-center text-sm-start pt-2 p-sm-0">
            Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
          </div>
          <div class="col-12 col-sm-3 text-sm-start  pt-2 p-sm-0">
              <a href="angeld.flores13@gmail.com">angeld.flores13@gmail.com</a>
          </div>
      </div>
    </footer>

    <div class="whatsapp">
      <a href="https://api.whatsapp.com/send?phone=541157403466" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
  </div>

  </body>

  <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>
</html>