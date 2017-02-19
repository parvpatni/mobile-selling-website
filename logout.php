<?php
session_start();
unset($_SESSION['email']);
echo "you have been successfully logged out, to shop again <a href=\"index.php\">Click here</a>";
?>