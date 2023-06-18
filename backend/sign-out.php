<?php

setcookie("name", $user['name'], time()-3600*24*30, "/");
setcookie("email", $user['email'], time()-3600*24*30, "/");

unset($_COOKIE["name"]);
unset($_COOKIE["email"]);

header("Location: ../");
?>