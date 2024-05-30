<?php

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ./secure");
    die();
}


require_once "../connect.php";
$anketaData = $conn->query("SELECT * FROM `anketa` ORDER BY `id` DESC");
?>

<style>
    td {
        vertical-align: middle;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Ім'я</th>
            <th scope="col">Рік народження</th>
            <th scope="col">Телефон</th>
            <th scope="col">Дія</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anketaData as $anketa): ?>
            <tr>
                <td>
                    <?php echo $anketa['name']; ?>
                </td>
                <td>
                    <?php echo $anketa['birth']; ?>
                </td>
                <td><a href="tel:<?php echo $anketa['tel']; ?>">
                        <?php echo $anketa['tel']; ?>
                    </a></td>
                <td>
                    <a href="javascript:void(0)" onclick="openAnketa(<?php echo $anketa['id'] ?>)"
                        class="text-info">Деталі</a><br>
                    <a href="javascript:void(0)" onclick="deleteAnketa(<?php echo $anketa['id'] ?>)"
                        class="text-danger">Вилучити</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function deleteAnketa(id) {
        $.ajax({
            type: "POST",
            url: './scripts/anketa/delete_anketa.php',
            data: { id: id },
            success: function (data) {
                window.location.href = "./?page=anketa";
            }
        });
    }
    function openAnketa(id) {
        $('#container').load('./scripts/anketa/open_anketa.php?id=' + id);
    }
</script>