<?php
// Start the session
session_start();

// Clear all session variables
session_unset();

// Destroy the session
session_destroy();

header('refresh: 0; http://127.0.0.1:8888/www/Gestion%20TP/Gestion_Film/poject/');

?>