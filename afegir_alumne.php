<?php
$pageTitle = "Afegir";
require __DIR__ . "/includes/header.php";
?>

<section class="card stack">
  <h1 class="h1" style="font-size:3rem;">Afegir achifoni</h1>
  <p class="p">Introdueix nom i email. Es guardarà a la base de dades.</p>

  <form class="form" action="insertar_alumne.php" method="post">
    <div class="stack" style="gap:.6rem;">
      <label for="nom">Nom</label>
      <input id="nom" name="nom" type="text" required maxlength="60" minlength="2">
    </div>

    <div class="stack" style="gap:.6rem;">
      <label for="email">Email</label>
      <input id="email" name="email" type="email" required maxlength="80">
    </div>

    <button class="btn btn-primary" type="submit">Enviar</button>
  </form>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
