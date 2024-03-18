<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../secure");
    die();
}


require_once "../../connect.php";

$id = htmlspecialchars(strip_tags($_GET['id']));

$anketaData = $conn->query("SELECT * FROM `anketa` WHERE `id` = '$id'");

$anketa = $anketaData->fetch_assoc();

$name = $anketa['name'];
$birth = $anketa['birth'];
$tel = $anketa['tel'];
$degree = $anketa['degree'];
$school = $anketa['school'];
$expInStructure = ($anketa['exp-in-structure'] == 1 ? "Так" : "Ні");
$structure = $anketa['structure'];
$rank = $anketa['rank'];
$vos = $anketa['vos'];
$expInBattle = ($anketa['exp-in-battle'] == 1 ? "Так" : "Ні");
$battle = $anketa['battle'];
$expWithGuns = ($anketa['exp-with-guns'] == 1 ? "Так" : "Ні");
$guns = $anketa['guns'];
$driver = ($anketa['driver'] == 0 ? "Немає" : $anketa['driver']);
$notes = $anketa['notes'];


?>

<style>
    .list-wrapper {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .list {
        width: 75%;
        display: flex;
        flex-direction: column;
        gap: 5px 0;
        list-style: none;
    }

    .list__item {
        display: flex;
        justify-content: space-between;
        border-bottom: 2px solid #0dcaf0;
        padding: 8px 0;
    }

    .list-title {
        font-size: 20px;
        margin-top: 0;
    }

    .list-text {
        font-size: 20px;
        margin-bottom: 0;
    }

    .btn-arrow {
        transform: rotate(180deg);
        margin-right: 5px;
    }

    #arrow-right-short {
        fill: #fff;
    }
</style>

<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="arrow-right-short" viewBox="0 0 16 16">
        <path id="" fill-rule="evenodd"
            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z" />
    </symbol>
</svg>

<div class="list-wrapper">
    <a class="btn btn-primary d-inline-flex align-items-center" href="./?page=anketa">
        <svg class="bi btn-arrow" width="20" height="20">
            <use xlink:href="#arrow-right-short"></use>
        </svg>
        Повернутися до усіх анкет
    </a>
    <ul class="list mt-4">
        <li class="list__item">
            <h3 class="list-title">Ім'я: </h3>
            <p class="list-text">
                <?php echo $name ?>
            </p>
        </li>
        <li class="list__item">
            <h3 class="list-title">Дата народження: </h3>
            <p class="list-text">
                <?php echo $birth ?>
            </p>
        </li>
        <li class="list__item">
            <h3 class="list-title">Телефон: </h3>
            <p class="list-text">
                <a href="tel:<?php echo $tel ?>">
                    <?php echo $tel ?>
                </a>
            </p>
        </li>

        <li class="list__item">
            <h3 class="list-title">Освіта: </h3>
            <p class="list-text">
                <?php echo $degree ?>
            </p>
        </li>
        <li class="list__item">
            <h3 class="list-title">Навчальний заклад: </h3>
            <p class="list-text">
                <?php echo $school ?>
            </p>
        </li>

        <li class="list__item">
            <h3 class="list-title">Досвід у структурах: </h3>
            <p class="list-text">
                <?php echo $expInStructure ?>
            </p>
        </li>
        <?php if ($expInStructure == "Так"): ?>
            <li class="list__item">
                <h3 class="list-title">В яких структурах: </h3>
                <p class="list-text">
                    <?php echo $structure ?>
                </p>
            </li>
        <?php endif ?>
        <li class="list__item">
            <h3 class="list-title">Звання: </h3>
            <p class="list-text">
                <?php echo $rank ?>
            </p>
        </li>
        <li class="list__item">
            <h3 class="list-title">ВОС: </h3>
            <p class="list-text">
                <?php echo $vos ?>
            </p>
        </li>

        <li class="list__item">
            <h3 class="list-title">Бойовий досвід: </h3>
            <p class="list-text">
                <?php echo $expInBattle ?>
            </p>
        </li>
        <?php if ($expInBattle == "Так"): ?>
            <li class="list__item">
                <h3 class="list-title">Де саме: </h3>
                <p class="list-text">
                    <?php echo $battle ?>
                </p>
            </li>
        <?php endif; ?>
        <li class="list__item">
            <h3 class="list-title">Досвід зі зброєю: </h3>
            <p class="list-text">
                <?php echo $expWithGuns ?>
            </p>
        </li>
        <?php if ($expWithGuns == "Так"): ?>
            <li class="list__item">
                <h3 class="list-title">Яка зброя: </h3>
                <p class="list-text">
                    <?php echo $guns ?>
                </p>
            </li>
        <?php endif; ?>

        <li class="list__item">
            <h3 class="list-title">Права: </h3>
            <p class="list-text">
                <?php echo $driver ?>
            </p>
        </li>
        <li class="list__item">
            <h3 class="list-title">Примітки: </h3>
            <p class="list-text">
                <?php echo $notes ?>
            </p>
        </li>
    </ul>
</div>