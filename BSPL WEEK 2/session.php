<?php
// What is a session?
// Used to manage information across difference pages
// Verify the user login info
session_start();
// SESSION IS SUPER GLOBAL
$_SESSION['username'] = "Harry";
$_SESSION['favCat'] = "Books";
echo "We have saved your session";
?>
