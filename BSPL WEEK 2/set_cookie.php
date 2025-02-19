<?php
echo "Welcome to the world of cookies<br>";
// 
// Cookies | Sessions

// Syntax to set a cookie
// setcookie ( name , value ,expiration time , path = "");
// echo time();
setcookie("category", "Books", time() + 86400, "/"); 
echo "The cookie is set<br>";

?>
