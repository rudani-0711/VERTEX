<?php
// auth_check.php
if (!isset($_SESSION['user_id'])) {
    $_SESSION['redirect_after_login'] = $_SERVER['REQUEST_URI'];
    echo "<script>
        alert('Please Login to access this page!');
        window.location.href = 'userlogin.php';
    </script>";
    exit;
}
?>