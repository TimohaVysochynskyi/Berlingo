<?php

require_once "../connect.php";

$lostData = $conn->query("SELECT * FROM `memory`");

?>

<?php foreach ($lostData as $lost): ?>
    <li class="lost__item">
        <img src="./assets/memory/<?php echo $lost['photo'] ?>" alt="<?php echo $lost['name'] ?>" class="lost__item-img" />
        <div class="lost__item-data">
            <p class="lost__item-personal">
                <span class="lost__item-rank">
                    <?php echo $lost['rank'] ?>
                </span><br />
                <span class="lost__item-name">
                    <?php echo $lost['name'] ?>
                </span><br />
                <span class="lost__item-psevdo">/
                    <?php echo $lost['psevdo'] ?>/
                </span> <br />
            </p>
            <br />
            <p class="lost__item-description">
                <?php echo $lost['description'] ?>
            </p>
        </div>
    </li>
<?php endforeach; ?>