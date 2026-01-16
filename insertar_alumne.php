<?php
require __DIR__ . "/db.php";
$pageTitle = "Insertar";
require __DIR__ . "/includes/header.php";

$nom = trim($_POST["nom"] ?? "");
$email = trim($_POST["email"] ?? "");

if ($nom === "" || $email === "") {
  echo '<section class="card"><p class="p" style="color:#ffd1d1;">Falten dades.</p><a class="btn" href="afegir_alumne.php">Tornar</a></section>';
  require __DIR__ . "/includes/footer.php";
  exit;
}

$stmt = $conn->prepare("INSERT INTO alumnes (nom, email) VALUES (?, ?)");
if (!$stmt) {
  die("Error prepare(): " . $conn->error);
}

$stmt->bind_param("ss", $nom, $email);
$stmt->execute();
$stmt->close();
?>

<section class="card stack">
  <h1 class="h1" style="font-size:3rem;">Inserit correctament</h1>
  <p class="p">Registre guardat per a <strong><?= htmlspecialchars($nom) ?></strong>.</p>

  <div class="actions">
    <a class="btn btn-primary" href="alumnes.php">Anar a la llista</a>
    <a class="btn" href="afegir_alumne.php">Afegir un altre</a>
  </div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
