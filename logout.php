<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    session_start();
    session_destroy();
    header("Location: login.php");
}
