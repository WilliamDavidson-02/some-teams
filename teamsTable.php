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