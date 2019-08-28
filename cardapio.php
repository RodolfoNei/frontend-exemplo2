<!doctype html>
<html lang="pt-BR">
  <?php include './inc/head.php' ?>
  <body>

    <!-- Menu de navegação superior -->
    <div id="nav-wrapper">
      <?php include './inc/nav.php' ?>
    </div>

    <!-- Header Principal -->
    <header id="delivery-header" class="d-flex align-items-center">
      <div class="container d-flex flex-wrap justify-content-end align-items-center">
        <h1 class="col-12 col-lg-4 text-lg-right px-lg-0">CARDÁPIO</h1>
        <div id="header-text-container" class="d-inline-block col-12 col-lg-5">
          <p>O MELHOR LUGAR PARA COMEMORAR A VIDA. COMER, BEBER & LEVAR.</p>
        </div>
      </div>
    </header>

    <!-- Cardápio - Opções -->
    <section id="cardapio-container" class="container">

      <div id="cardapio-input-group" class="my-5 input-group ml-auto">
        <select class="custom-select" v-model="selected">
          <option value="">--CARDÁPIO--</option>
          <option value="0">CHOPP</option>
          <option value="1">CERVEJAS 600ml</option>
          <option value="2">CERVEJAS ESPECIAIS</option>
          <option value="3">LONG-NECK</option>
          <option value="4">REFRIGERANTES /ÁGUA</option>
          <option value="5">SUCOS</option>
          <option value="6">DRINKS</option>
          <option value="7">DOSES</option>
          <option value="8">DESTILADOS</option>
          <option value="9">PORÇÕES FRIAS</option>
          <option value="10">ESPETINHOS</option>
          <option value="11">PORÇÕES QUENTES</option>
          <option value="12">GRANDES PORÇÕES</option>
          <option value="13">SANDUÍCHES</option>
          <option value="14">SOBREMESAS</option>
        </select>
      </div>

      <div id="lista-itens" v-if="escolha" class="d-flex flex-column m-auto col-7">
        <div v-for="item in escolha.items" class="my-2">
          <h3 class="my-2">{{ item.toUpperCase() }}</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis  ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
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
    <!-- VueJS -->
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <!-- Meu JS -->
    <script src="./src/main.js"></script>
    <?php include './inc/script.php' ?>
  </body>
</html>