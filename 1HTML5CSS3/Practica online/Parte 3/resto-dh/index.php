
<!DOCTYPE html>
<?php
//creamos un array con los platos que queremos que aparezca en la pagina
$platos = [
  [
    'nombre' => 'Pollo al verdeo',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex nostrum, nisi nihil earum voluptas cupiditate dignissimos rerum illum esse.',
    'precio' => 900,
    'imagen' => 'pollo_verdeo.jpg'
  ],
  [
    'nombre' => 'Suprema Maryland',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex nostrum, nisi nihil earum voluptas cupiditate dignissimos rerum illum esse.',
    'precio' => 600,
    'imagen' => '123123123.jpg'
  ],
  [
    'nombre' => 'Fritas con fritas',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex nostrum, nisi nihil earum voluptas cupiditate dignissimos rerum illum esse.',
    'precio' => 100,
    'imagen' => 'plato1.jpg'
  ],
  ['nombre' => 'Sarasa con firulais',
  'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex nostrum, nisi nihil earum voluptas cupiditate dignissimos rerum illum esse.',
  'precio' => 10
  ],
  [
    'nombre' => 'Agua sola',
    'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusantium ex nostrum, nisi nihil earum voluptas cupiditate dignissimos rerum illum esse.',
    'precio' => 9000
  ]
];
?>
<html lang="en">

<?php require_once 'partials/head.php' ?>

<body>

<!-- Con esto estoy reutilizando la navegacion configurada -->
<?php require_once 'partials/nav.php' ?>

  <div class="container-fluid p-0">

    <section class="__wrapper-carousel">
      <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active slide1">
            <div class="__text-combo __light">
              <h2>Bienvenido</h2>
              <h3>El Resto</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
          <div class="carousel-item slide2">
            <div class="__text-combo __light">
              <h2>prueba 2</h2>
              <h3>Ad lorem</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
          <div class="carousel-item slide3">
            <div class="__text-combo __light">
              <h2>prueba 3</h2>
              <h3>dolor sit</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>

    <section class="__wrapper-intro" id="intro">
      <div class="row __max-width __pads-y">
        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <div class="__text-combo __dark">
            <h2>Bienvenido</h2>
            <h3>El Resto</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel labore minus impedit veniam, ex sint harum sit iste, accusantium repudiandae aut facilis quod error, officia magnam distinctio vitae natus, maxime adipisci nesciunt
              necessitatibus dicta dolore provident! Officiis, ex. Nisi, veritatis.</p>
          </div>
        </article>
        <article class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
          <img src="img/img_1.jpg" alt="">
        </article>
      </div>
    </section>

    <section class="__wrapper-events" id="events">
      <div class="__header-events">
        <div class="__text-combo __light __max-width">
          <h2>Bienvenido</h2>
          <h3>El Resto</h3>
        </div>
      </div>
      <div class="__body-events">
        <div class="row __max-width">
        <!-- Comienzo a recorrer el array de platos para mostrar -->
        <?php foreach($platos as $elPlato): ?>
          <!-- cong del article -->
          <article class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
            <div class="__card">
              <div class="__inner-img">
                <!-- IF TERNARIO si elPlato tiene imagen traela, sino le seteamos una por default -->
                <img src="img/<?= (array_key_exists("imagen",$elPlato)) ? $elPlato['imagen'] : "img_square_1.jpg" ?>" alt="">
              </div>
              <div class="__inner-text">
                <!--extraigo los datos en el momento de la iteracion  -->
                <h4><?= $elPlato['nombre']; ?></h4>
                <p><?= $elPlato['descripcion'] ?></p>
                <h5><?= '$' . $elPlato['precio'] ?></h5>
              </div>
            </div>
          </article>

        <?php endforeach; ?>

        </div>
      </div>
    </section>

    <?php require_once 'partials/footer.php' ?>

  </div>


  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
