<?php
$pageTitle = "Galeria";
require __DIR__ . "/includes/header.php";

$dir = __DIR__ . "/uploads";
$files = is_dir($dir) ? scandir($dir) : [];

function es_imagen($file) {
  $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
  return in_array($ext, ["jpg", "jpeg", "png", "webp"], true);
}
?>

<section class="card stack">
  <h1 class="h1" style="font-size:3rem;">Galeria (achifoni)</h1>
  <p class="p">Imatges llegides amb <strong>scandir()</strong> des de <strong>uploads/</strong>.</p>

  <div class="galeria">
    <?php foreach ($files as $file): ?>
      <?php
        // Ignorar carpetes del sistema
        if ($file === "." || $file === "..") continue;

        // ❌ Excluir la imagen de portada
        if ($file === "hero.jpg" || $file === "hiro.jpg") continue;

        // Solo imágenes válidas
        if (!es_imagen($file)) continue;

        $src = "uploads/" . $file;
      ?>
      <img src="<?= $src ?>" alt="<?= htmlspecialchars($file) ?>" loading="lazy">
    <?php endforeach; ?>
  </div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
