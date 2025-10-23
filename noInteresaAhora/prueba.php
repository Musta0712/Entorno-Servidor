<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/styleAM.css">
</head>
<body>
    <?php
$temperatures = [];

for ($i = 0; $i < 6; $i++) {
    $cityTemps = [];
    for ($j = 0; $j < 6; $j++) {
        $cityTemps[] = rand(-10, 45);
    }
    $temperatures[] = $cityTemps;
}

// Encuentra mínimas, máximas, variaciones, medias
$minTemp = 45;
$maxTemp = -10;
$dayGreatestVariation = 0;
$greaterVariation = 0;
$tempMediaCity = [];
$cityMaxMediaIndex = 0;
$cityMaxMediaValue = -100;

for ($i = 0; $i < 6; $i++) {
    $sumCity = 0;
    $tempMinDay = 45;
    $tempMaxDay = -10;

    for ($j = 0; $j < 6; $j++) {
        $temp = $temperatures[$i][$j];
        $sumCity += $temp;

        if ($temp < $minTemp) $minTemp = $temp;
        if ($temp > $maxTemp) $maxTemp = $temp;

        if ($temp < $tempMinDay) $tempMinDay = $temp;
        if ($temp > $tempMaxDay) $tempMaxDay = $temp;
    }

    $variation = $tempMaxDay - $tempMinDay;
    if ($variation > $greaterVariation) {
        $greaterVariation = $variation;
        $dayGreatestVariation = $i + 1;
    }

    $media = $sumCity / 6;
    $tempMediaCity[$i] = $media;

    if ($media > $cityMaxMediaValue) {
        $cityMaxMediaValue = $media;
        $cityMaxMediaIndex = $i;
    }
}
?>
<table>
    <tr>
        <th>Ciudad/Día</th>
        <?php for ($j = 0; $j < 6; $j++): ?>
            <th>Dia <?= $j + 1 ?></th>
        <?php endfor; ?>
        <th>Media</th> <!-- Nueva columna para la media -->
    </tr>

    <?php for ($i = 0; $i < 6; $i++): 
        $highlightCity = ($i == $cityMaxMediaIndex) ? " highlight-city" : "";
    ?>
        <tr class="<?= $highlightCity ?>">
            <td>Ciudad <?= $i + 1 ?></td>
            <?php 
            for ($j = 0; $j < 6; $j++): 
                $temp = $temperatures[$i][$j];
                $classes = [];

                if ($temp < 0) $classes[] = "cold";
                if ($temp > 35) $classes[] = "hot";
                if ($temp == $minTemp) $classes[] = "min-temp";
                if ($temp == $maxTemp) $classes[] = "max-temp";
                if ($j == 5) $classes[] = "weekend";

                $classAttr = implode(" ", $classes);
            ?>
                <td class="<?= $classAttr ?>"><?= $temp ?>ºC</td>
            <?php endfor; ?>
            
            <!-- Columna de media por ciudad -->
            <td><?= round($tempMediaCity[$i], 2) ?>ºC</td>
        </tr>
    <?php endfor; ?>
</table>
</body>
</html>