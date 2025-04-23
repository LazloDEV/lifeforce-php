<?php
session_start();
$_SESSION = []; // Clear session data
session_destroy(); // Destroy session
header('Location: index.php');
exit;
