<?php
session_start();
session_unset();
session_destroy();
header("Location: ../pages/login/login.php?google_logout=true");
exit();
?>