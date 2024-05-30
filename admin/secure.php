<?php
session_start();

$_SESSION['admin'] = false;

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = strip_tags($data);
    $data = htmlspecialchars($data);
    if ($data == "") {
        $data = 0;
    }
    return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = 'd8af0129cdfd7981f9f2fef3c7ff9800';
    $passwordInput = test_input($_POST['password']);

    if (md5($passwordInput) === $password) {
        $_SESSION['admin'] = true;
        header("Location: ../admin/");
    } else {
        $errorMessage = "Невірний пароль";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BERLINGO | Вхід в панель керування</title>

    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <main class="form-wrapper">
        <form class="auth-form" method="post" action="./secure">
            <img class="mb-1 auth-form__logo" src="../assets/berlingo-colored.png" alt="Логотип">
            <h1 class="h3 mb-1 font-weight-normal text-center">Авторизуйтеся</h1>
            <input type="password" name="password" class="form-control" placeholder="Пароль" required="">
            <button class="btn btn-lg btn-primary btn-block w-100" type="submit">Увійти</button>
            <?php
            if (isset($errorMessage)) {
                echo '<p>' . $errorMessage . '</p>';
            }
            ?>
        </form>
    </main>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>