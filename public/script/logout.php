<?php
session_start();
session_unset();
session_destroy();
header("Location: ../pages/homepage/homepage.php?google_logout=true");
exit();
?>