<?php
session_start();
session_destroy();
unset($_SESSION['user']);
unset ($_SESSION['password']);
unset ($_SESSION['status']);
header('location:../index.php');
?>