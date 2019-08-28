<!doctype html>
<html lang="pt-BR">

  <?php include './inc/head.php' ?>

  <body>

    <!-- Menu de navegação superior -->
    <div id="nav-wrapper">
      <?php include './inc/nav.php' ?>
    </div>

    <!-- Header Principal -->
    <header id="home-header">

      <div id="banner-text-container" class="d-flex justify-content-center">
        <p class="col-11 col-sm-10 col-md-7 col-lg-8">O MELHOR LUGAR PARA COMEMORAR A VIDA. COMER, BEBER & LEVAR.</p>
      </div>

      <div id="carousel-div" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#carousel-div" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-div" data-slide-to="1"></li>
        </ol>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <picture>
              <source srcset="img/banner1.png" media="(min-width: 676px)" />
              <img src="img/banner1-sm.png">
            </picture>
          </div>
          <div class="carousel-item">
            <picture>
              <source srcset="img/banner2.png" media="(min-width: 676px)" />
              <img src="img/banner2-sm.png">
            </picture>
          </div>
        </div>

      </div>

    </header>

    <!-- Quem somos -->
    <?php include './inc/sobre-inc.php' ?>

    <!-- Unidades -->
    <section class="d-flex align-items-center py-4" id="home-unidades">
      <div class="container d-flex flex-column justify-content-center align-items-center">
        <img class="d-none d-xl-block" src="img/home-unidades.png" alt="">
        <div id="unidades-texto" class="col-10 col-xl-5">
          <p>BAR, CHOPERIA, DELIVERY E LOJA. LOCALIZADO EM ZONAS PRIVILEGIADAS, O DBB JÁ ESTÁ PRESENTE EM ITAJUBA E ESTÁ PRESTES A INAUGURAR NAS CIDADES DE SÃO JOSÉ DO RIO PRETO, GOIÂNIA, RIO DE JANEIRO E RIBEIRÃO PRETO.</p>
          <a href="unidades.php">CONHEÇA AS UNIDADES</a>
        </div>
      </div>
    </section>

    <!-- Franquias Chopp Time -->
    <?php include './inc/franquia-form.php' ?>

    <!-- Contato -->
    <?php include './inc/contato-inc.php' ?>

    <!-- Footer -->
    <div id="footer-wrapper">
      <?php include './inc/footer.php' ?>
    </div>

    <!-- Javascript -->
    <?php include './inc/script.php' ?>

  </body>
</html>
