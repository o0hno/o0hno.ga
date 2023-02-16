<?php
if (isset($_GET['username'])) {
    $username = $_GET['username'];

    // обработка полученного никнейма
    // ...

    // перенаправление на другую страницу
    header("Location: result.php?username=$username");
    exit();
} else {
    header("Location: index.php");
    exit();
}
?>