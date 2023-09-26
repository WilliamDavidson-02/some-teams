<?php 
    require_once __DIR__ . '/header.php'; 
    require_once __DIR__ . '/data.php';

?>
<main>
    <section>
        <?php require __DIR__ . '/totalTeams.php'; ?>
    </section>
    <section class="table-section">
        <?php require __DIR__ . '/teamsTable.php'; ?>
    </section>
    <section class="city-values-container">
        <?php require __DIR__ . '/cityValues.php';  ?>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>