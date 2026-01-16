<?php
require __DIR__ . "/db.php";
$pageTitle = "Llista";
require __DIR__ . "/includes/header.php";

$result = $conn->query("SELECT id, nom, email FROM alumnes ORDER BY id DESC");
?>

<section class="card stack">
  <h1 class="h1" style="font-size:3rem;">Llista (achifoni)</h1>
  <p class="p">Registres guardats a la taula <strong>alumnes</strong>.</p>

  <?php if (!$result || $result->num_rows === 0): ?>
    <p class="p">No hi ha registres.</p>
  <?php else: ?>
    <div class="table-wrap">
      <table class="table">
        <thead>
          <tr>
            <th>id</th>
            <th>nom</th>
            <th>email</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= (int)$row["id"] ?></td>
              <td><?= htmlspecialchars($row["nom"]) ?></td>
              <td><?= htmlspecialchars($row["email"]) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>

  <div class="actions">
    <a class="btn btn-primary" href="afegir_alumne.php">Afegir achifoni</a>
  </div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>
