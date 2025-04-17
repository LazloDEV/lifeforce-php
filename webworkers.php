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
          <a class="nav-link active" aria-current="page" href="webworkers.php">Web workers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="canvas.php">Canvas</a>
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
    <h1>HTML5 - Web Workers</h1>
    <p class="lead">This example of Web Workers.</p>
    <p>Count numbers: <output id="result"></output></p>
    <button type="button" class="btn btn-secondary" id="startWorker2">Start Calculate Worker</button>
    <button type="button" class="btn btn-secondary" id="startWorker1">Start Counter Worker</button>
    <button type="button" class="btn btn-secondary" id="bgButton">Change Background</button>
    <button type="button" class="btn btn-secondary" id="stopWorkers">Stop Workers</button>
    <div id="myContainer">&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;<br>&nbsp;</div>
  </div>
</main>


<script defer src="js/main.js"></script>
<?php include 'footer.php'; ?>
