<?php
    session_start();

    unset($_SESSION['nome']);
    unset($_SESSION['cargo']);

    header('Location: index.php');
?>