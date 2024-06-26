<?php

session_start();

// Security measures
if (!isset($_SESSION['admin']) && $_SESSION['admin'] !== true) {
    header("Location: ../../secure");
    die();
}


require_once "../../../connect.php";

$postData = $conn->query("SELECT * FROM `gallery`");

?>

<style>
    td {
        vertical-align: middle;
    }
</style>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Опис</th>
            <th scope="col">Дата</th>
            <th scope="col">Дія</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($postData as $post): ?>
            <tr>
                <td>
                    <?php echo $post['description']; ?>
                </td>
                <td>
                    <?php echo $post['date']; ?>
                </td>
                <td>
                    <a href="#" onclick="editPost(<?php echo $post['id'] ?>)" class="text-info">Редагувати</a><br>
                    <a href="#" onclick="deletePost(<?php echo $post['id'] ?>)" class="text-danger">Вилучити</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    function deletePost(id, image) {
        $.ajax({
            type: "POST",
            url: './scripts/gallery/delete_post.php',
            data: { id: id },
            success: function (data) {
                $("#gallery-wrapper").load('./scripts/gallery/get_post.php');
            }
        });
    }
    function editPost(id) {
        $('#container').load('./scripts/gallery/edit_post.php?id=' + id);
    }
</script>