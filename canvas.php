<?php include 'header.php'; ?>
<?php include 'themeSelector.php'; ?>
    
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src="img/favicon/android-icon-48x48.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        Lifeforce v1
    </a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="webworkers.php">Web workers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="canvas.php">Canvas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Animation</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-body-tertiary p-5 rounded">
    <h1>HTML5 - Canvas</h1>
    <p class="lead">This example of Canvas.</p>
    <canvas id="canvas" width="150" height="150"></canvas>
    <br><br>
    <canvas id="canvasGame" width="600" height="400"></canvas>
  </div>
</main>
<script defer src="js/canvas1.js"></script>
<script src="js/gamecore.js"></script>
<script src="js/game.js"></script>
<?php include 'footer.php'; ?>
