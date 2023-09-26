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
                <tr>
                    <td>Team</td>
                    <td>League</td>
                    <td>Last championship</td>
                    <td>City</td>
                    <td>Website</td>
                </tr>
                <?php foreach ($teams as $key => $team): ?>
                    <tr>
                        <td><?= $key; ?></td>
                        <td><?= $team['league'] ?></td>
                        <td><?= $team['last-time-champions'] ?></td>
                        <td><?= $team['city'] ?></td>
                        <td><?= $team['url'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</main>

<?php require_once __DIR__ . '/footer.php'; ?>