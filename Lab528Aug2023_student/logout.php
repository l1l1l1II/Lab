<?php
// Start or resume the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();
header("Location: index.html");
?>
