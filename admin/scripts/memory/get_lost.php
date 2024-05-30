<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$lostData = $conn->query("SELECT * FROM `memory`");

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
            <th scope="col">Позивний</th>
            <th scope="col">Звання</th>
            <th scope="col">Дія</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lostData as $lost): ?>
            <tr>
                <td>
                    <?php echo $lost['name']; ?>
                </td>
                <td>
                    <?php echo $lost['psevdo']; ?>
                </td>
                <td>
                    <?php echo $lost['rank']; ?>
                </td>
                <td>
                    <a href="#" onclick="editLost(<?php echo $lost['id'] ?>)" class="text-info">Редагувати</a><br>
                    <a href="#" onclick="deleteLost(<?php echo $lost['id'] ?>)" class="text-danger">Вилучити</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function deleteLost(id) {
        $.ajax({
            type: "POST",
            url: './scripts/memory/delete_lost.php',
            data: { id: id },
            success: function (data) {
                $("#lost-wrapper").load('./scripts/memory/get_lost.php');
            }
        });
    }
    function editLost(id) {
        $('#container').load('./scripts/memory/edit_lost.php?id=' + id);
    }
</script>