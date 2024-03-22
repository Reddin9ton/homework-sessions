<?php
session_start();
$_SESSION['counter'] += 1;
if ($_SESSION['counter'] % 3 == 0) {
    header("Location: /4.php",TRUE,302);

};