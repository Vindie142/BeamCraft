<?php
setcookie('user', $user['login'], time() - 7776000, "/");
header('Location: /order');
 ?>
