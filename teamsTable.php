<!-- table head colspan count($teams) + 1 is $teams array plus teams column which it the key for each inner array. -->

<table>
    <thead>
        <tr>
            <th class="teams-header" colspan="<?= count($teams) + 1; ?>">Teams</th>
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
        <?php foreach ($teams as $key => $team) : ?>
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