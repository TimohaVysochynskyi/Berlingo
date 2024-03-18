<?php

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'instructions';

?>

<?php if (isset($_SESSION['admin']) && $_SESSION['admin'] === true): ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BERLINGO | Керування</title>

        <link rel="stylesheet" href="./style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>

        <nav class="sidebar d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary">
            <a href="./"
                class="d-flex align-items-center justify-content-evenly mb-3 mb-md-0 link-body-emphasis text-decoration-none">
                <img src="../assets/berlingo-colored.png" alt="Logo" width=34>
                <p class="fs-4 mb-0">210 ОСБ BERLINGO</p>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="./?page=anketa"
                        class="nav-link <?php echo ($page == "anketa" ? "active" : "link-body-emphasis") ?>">
                        Анкети на вступ
                    </a>
                </li>
                <li>
                    <a href="./?page=memory"
                        class="nav-link <?php echo ($page == "memory" ? "active" : "link-body-emphasis") ?>">
                        Стіна пам'яті
                    </a>
                </li>
                <li>
                    <a href="./?page=gallery"
                        class="nav-link <?php echo ($page == "gallery" ? "active" : "link-body-emphasis") ?>">
                        Галерея
                    </a>
                </li>
            </ul>
        </nav>

        <main class="content p-4" id="container">
            <?php

            if (file_exists('./' . $page . '.php')) {
                include('./' . $page . '.php');
            } else {
                include('./instructions.html');
            }
            ?>
        </main>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
            integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
    </body>

    </html>
<?php else: ?>
    <?php header("Location: ./secure");
    die(); ?>
<?php endif; ?>