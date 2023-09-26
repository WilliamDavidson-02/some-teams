<?php

$cityValues = [];

// Filter city's to only allow one of the same city
foreach ($teams as $team) {
    if (!in_array($team['city'], $cityValues))
    $cityValues[] = $team['city'];
}

foreach ($cityValues as $city): ?>
    <h3><?= $city; ?></h3>
<?php endforeach; ?>