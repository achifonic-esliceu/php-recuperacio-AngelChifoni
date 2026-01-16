<?php
if (!isset($pageTitle)) { $pageTitle = "Inici"; }
?>
<!DOCTYPE html>
<html lang="ca">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($pageTitle) ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/css/normalize.css?v=<?= time() ?>">
  <link rel="stylesheet" href="/css/style.css?v=<?= time() ?>">
</head>
<body>

<?php require_once __DIR__ . "/../db.php"; ?>

<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="index.php">achifoni</a>

    <nav class="nav">
      <a class="nav-link" href="index.php">Inici</a>
      <a class="nav-link" href="alumnes.php">Llista</a>
      <a class="nav-link" href="afegir_alumne.php">Afegir</a>
      <a class="nav-link" href="galeria.php">Galeria</a>
    </nav>
  </div>
</header>

<main class="container main">

