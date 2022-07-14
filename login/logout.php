<?php

session_start();
unset($_SESSION['user']);


header('location:../login/logout_note.php');
?>