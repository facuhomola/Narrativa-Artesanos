<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <link rel="stylesheet" href="./../../css/index.css">
    <script src="./../../js/bootstrap.min.js"></script>
    <title>Artesanos.com - Mi Perfil</title>
</head>
<body>

    <!--Header-->
    <?php require './../../recursos/header.php' ?>
    <!--Fin Header-->


    <!--Perfil-->
    <section class="home py-5" id="home">
        <div class="container-lg">
          <div class="row min-vh-100 align-items-center align-content-center">
            <div class="col-md-6">
              <div class="home-img text-center" style="margin-top: 3%;">
                <img src="fotosPerfil/user1.jpg" class="rounded-circule mw-100" alt="imagen perfil" style="border-radius: 30%;" height="375px">
              </div>
            </div>
            <div class="col-md-6 mt-5 mt-md-0">
              <div class="home-text">
                <p class="text-muted mb-1">Hola Soy</p>
                <h2 class="fs-4 text-uppercase fw-bold link-light">Emma Stone</h2>
                <p class="mt-4 link-light"><b>Descripción: </b> Lorem ipsum dolor sit amet consectetur adipiscing elit suspendisse dui, volutpat iaculis lacinia sagittis etiam hac sem augue varius, lacus vitae malesuada ornare est feugiat posuere potenti.</p>
                <p class="mt-4 link-light"><b>Intereses</b> ciencia - ciudades - artes </p>
                <button class="btn btn-primary px-3 mt-3">Seguir</button>
              </div>          
            </div>
          </div>
          <h1 class=" fw-bold text-center link-light"><i>Mis obras</i></h1>
        </div>
      </section>
    <!--Fin Perfil-->

  <!--Galeria-->
  <section id="galeria" class="container">
    <div class="row">
      <div class="col-lg-4">
          <a href="" class="link-light">
              <div class="card" style="width: 24rem;">
                  <img src="pinturas/img1.jpg" class="card-img-top img-obras" alt="obra1">
                    <div class="card-body">
                      <p class="card-text">Pinturas</p>
                    </div>
              </div>
          </a>
      </div>
      <div class="col-lg-4">
          <a href="" class="link-light">
              <div class="card" style="width: 24rem;">
                  <img src="ciudades/img1.png" class="card-img-top img-obras" alt="obra1">
                    <div class="card-body">
                      <p class="card-text">Ciudades</p>
                    </div>
              </div>
          </a>
      </div>
      <div class="col-lg-4">
          <a href="" class="link-light">
              <div class="card" style="width: 24rem;">
                  <img src="paisajes/img1.jpg" class="card-img-top img-obras" alt="obra1">
                    <div class="card-body">
                      <p class="card-text">Paisajes</p>
                    </div>
              </div>
          </a>
      </div>
    </div>
  </section>
  <!--Fin Galeria-->

</body>
</html>