<?php
$pageTitle = "Inici";
require __DIR__ . "/includes/header.php";
?>

<section class="card hero">
  <div class="stack">
    <h1 class="h1">Benvingut/da, achifoni</h1>
    <p class="p">Projecte PHP amb mysqli, formulari d’alta i llista de registres. Galeria d’imatges responsive.</p>

    <div class="actions">
      <a class="btn btn-primary" href="afegir_alumne.php">Afegir achifoni</a>
      <a class="btn" href="alumnes.php">Veure llista</a>
      <a class="btn" href="galeria.php">Galeria</a>
    </div>
  </div>

  <div class="hero-media" aria-label="Hero"></div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
