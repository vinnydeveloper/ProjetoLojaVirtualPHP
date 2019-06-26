<?php 
$exp = time() + 1000;
setcookie("nome","vinicius", $exp);
var_dump($_COOKIE);