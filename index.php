<?php
session_start();

// Redirect if already logged in
if (isset($_SESSION['username'])) {
    header('Location: home.php');
    exit;
}
?>
<?php include 'header.php'; ?>
<?php include 'themeSelector.php'; ?>
    

<main class="container text-center">
  <h1>WELCOME to Lifeforce Project</h1>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModalMariadb">
    Login with MariaDB
  </button>
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary mt-3" data-bs-toggle="modal" data-bs-target="#myModalPostgres">
    Login with Postgres
  </button>
  <br>
  <br>
  <br>
  <?php
// Check if the parameter exists in the URL
if (isset($_GET['param'])) {
    // Get the value
    $value = $_GET['param'];
    
    // Check if the value matches what you're looking for
    if ($value == "login_failure") { ?>
<div class="alert alert-danger" role="alert">
  Invalid username or password.
</div>
<?php
   }
}
?>
</main>


<!-- Modal Postgres -->
<div class="modal fade" id="myModalPostgres" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <img src="img/PostgreSQL-logo-2.png" alt="Icon" style="height: 30px; margin-right: 10px;">
		  <h5 class="modal-title" id="modalLabel">Login with Postgres</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  This is a Bootstrap 5.3 modal. Click outside or on the close button to dismiss.
		  <form class="" action="login.php" method="post">
			<div class="form-floating mb-3">
			  <input name="username" type="text" class="form-control rounded-3" id="username" placeholder="myusername or name@example.com">
			  <label for="username">Username or Email Address</label>
			</div>
			<div class="form-floating mb-3">
			  <input name="password" type="password" class="form-control rounded-3" id="password" placeholder="Password">
			  <label for="password">Password</label>
			</div>
			<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Log in</button>
			<small class="text-body-secondary">By clicking Log in, you agree to the terms of use.</small>
		  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div>

<!-- Modal MariaDB -->
<div class="modal fade" id="myModalMariadb" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
	<div class="modal-dialog">
	  <div class="modal-content">
		<div class="modal-header">
		  <img src="img/MariaDB-logo-2.png" alt="Icon" style="height: 30px; margin-right: 10px;">
		  <h5 class="modal-title" id="modalLabel">Login with MariaDB</h5>
		  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
		  This is a Bootstrap 5.3 modal. Click outside or on the close button to dismiss.
		  <form class="" action="login.php" method="post">
			<div class="form-floating mb-3">
			  <input name="username" type="text" class="form-control rounded-3" id="username" placeholder="myusername or name@example.com">
			  <label for="username">Username or Email Address</label>
			</div>
			<div class="form-floating mb-3">
			  <input name="password" type="password" class="form-control rounded-3" id="password" placeholder="Password">
			  <label for="password">Password</label>
			</div>
			<button class="w-100 mb-2 btn btn-lg rounded-3 btn-primary" type="submit">Log in</button>
			<small class="text-body-secondary">By clicking Log in, you agree to the terms of use.</small>
		  </form>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
</div>

<?php include 'footer.php'; ?>
