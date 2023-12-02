<?php
session_start();
unset($_SESSION['user-id']);
unset($_SESSION['logged-in']);
header("Location: ../../../index.php");
