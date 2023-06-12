<nav class="navbar navbar-expand-lg navbar-dark bg-black">
  <div class="container">
    <a class="navbar-brand " href="#">Welcome Sir !</a>
    <div class="icon">
    <h5>
        <a href="logout.php" style="text-decoration:none;"><i  data-feather="log-out" data-bs-toggle="tooltip" title="Sign Out"></i></a>
    </h5>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link <?= uriIs(BASE_URL); ?>" aria-current="page" href="<?= BASE_URL; ?>"></a>
        <a class="nav-link <?= uriIs(BASE_URL . 'about.php'); ?>" href="about.php"></a>
      </div>
    </div>
  </div>
</nav>
