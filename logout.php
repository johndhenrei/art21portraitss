<?php
// Clear the user cookie
setcookie('customer', '', time() - 3600, '/'); // Set expiry time to a past time to delete the cookie

// Redirect to the home page
header('Location: INDEX.php');
exit(); // Make sure to exit after redirection
?>