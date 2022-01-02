<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: ./index.php");
}
?>
<html>

<head>
    <title>Menu</title>
</head>

<body>
    <p>You have been logged.</p><br>
    <a href="./logout.php">Logout</a>
</body>

</html>