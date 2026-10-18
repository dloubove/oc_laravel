<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Page d'accueil Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">MonSite</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#">Accueil</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Hero -->
<section class="bg-light py-5 text-center">
  <div class="container">
    <h1 class="display-4">Bienvenue sur mon site</h1>
    <p class="lead">Une page d’accueil moderne et responsive avec Bootstrap.</p>
    <a href="#" class="btn btn-primary btn-lg">En savoir plus</a>
  </div>
</section>

<!-- Sections -->
<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4">
        <h3>Section 1</h3>
        <p>Description de votre service ou fonctionnalité.</p>
      </div>
      <div class="col-md-4">
        <h3>Section 2</h3>
        <p>Un autre bloc de contenu important.</p>
      </div>
      <div class="col-md-4">
        <h3>Section 3</h3>
        <p>Présentez ce que vous voulez mettre en avant.</p>
      </div>
    </div>
  </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3">
  <p>&copy; 2026 MonSite - Tous droits réservés</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
