<?php
session_start();
$_SESSION['counter'] = ($_SESSION['counter'] ?? 0) + 1;
if ($_SESSION['counter'] % 3 == 0) {
    header("Location: /4.php",TRUE,302);
    exit;

};