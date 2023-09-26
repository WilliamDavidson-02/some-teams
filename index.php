<?php 
    require_once __DIR__ . '/header.php'; 
    require_once __DIR__ . '/data.php';
    require_once __DIR__ . '/teamNames.php';
?>
<main>
    <section>
        <div class="total-number-container">
            <h3>Total number of teams</h3>
            <?php require __DIR__ . '/totalTeams.php'; ?>
        </div>
    </section>
    <section>
        <table>
            <thead>
                <tr>
                    <th colspan="5">Teams</th>
                </tr>
            </thead>
            <tbody>
                <tr class="column-header">
                    <th>Team</th>
                    <th>League</th>
                    <th>Last championship</th>
                    <th>City</th>
                    <th>Website</th>
                </tr>
                <?php foreach ($teams as $key => $team): ?>
                    <tr>
                        <td><?= $key; ?></td>
                        <td><?= $team['league'] ?></td>
                        <td><?= $team['last-time-champions'] ?></td>
                        <td><?= $team['city'] ?></td>
                        <td class="team-url"><a target="_blank" href="<?= $team['url'] ?>"><?= $key; ?></a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>