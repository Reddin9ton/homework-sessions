<?php
session_start();
echo "Добро пожаловать на конечную станцию <br>";
echo "Ваше количество посещений Page 3 = " . $_SESSION['counter'];