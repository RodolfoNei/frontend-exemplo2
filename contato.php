<!doctype html>
<html lang="pt-BR">
  <?php include './inc/head.php' ?>
  <body>

    <!-- Menu de navegação superior -->
    <div id="nav-wrapper">
      <?php include './inc/nav.php' ?>
    </div>

    <!-- Header Principal -->
    <header id="contato-header" class="d-flex align-items-center">
      <div class="container d-flex flex-wrap justify-content-end align-items-center">
        <h1 class="col-12 col-lg-4 text-lg-right px-lg-0">CONTATO</h1>
        <div id="header-text-container" class="d-inline-block col-12 col-lg-5">
          <p>O MELHOR LUGAR PARA COMEMORAR A VIDA. COMER, BEBER & LEVAR.</p>
        </div>
      </div>
    </header>

    <!-- Contato - Franquias -->
    <?php include './inc/contato-inc-form.php' ?>

    <!-- Contato - Mapa -->
    <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.8531912581225!2d-47.81716028544174!3d-21.197990184457645!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94b9bec4f1d40001%3A0x87cd63ea3dd560fd!2sAv.+Independ%C3%AAncia%2C+2579+-+Jardim+Sumare%2C+Ribeir%C3%A3o+Preto+-+SP%2C+14025-235!5e0!3m2!1sen!2sbr!4v1565287139820!5m2!1sen!2sbr" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

    <!-- Footer -->
    <div id="footer-wrapper">
      <?php include './inc/footer.php' ?>
    </div>

    <!-- Javascript -->
    <?php include './inc/script.php' ?>
  </body>
</html>
