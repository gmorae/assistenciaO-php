<?php
include_once './common/head.php';
include_once './components/navbar.php';
?>

<section class="banner">
  <img src="./assets/img/banner.png" alt="banner">
  <div>
    <h1>Bem-vindo a assistencia tecnica do professor Obama</h1>
    <p>Tudo o que voce realmente precisa, aqui voce encontra!</p>
    <a href="#">
      Veja nosso serviços
      <img src="./assets/img/arrow.svg" alt="seta">
    </a>
  </div>
</section>

<main class="services container">
  <h2>Serviços de alto desempenho para várias empresas.</h2>
  <section>
    <?php include_once './components/service.php'; ?>
  </section>
  <button class="btn">Veja todos os serviços</button>
</main>

<?php
include_once './common/footer.php';
?>