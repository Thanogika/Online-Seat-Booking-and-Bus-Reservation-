<?php
session_start();
session_unset($_SESSION['cus_id']);
session_unset($_SESSION['admin_id']);
session_destroy();
header("Location: login1.php");
?>