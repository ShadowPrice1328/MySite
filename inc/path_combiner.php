<?php
    $month = substr($uri_parts[0], 0, -4);
    $year = substr($uri_parts[0], -4);

    $month_year = str_split($uri_parts[0], strlen($uri_parts[0]) - 4);

    if (strlen($year) === 4 && ctype_digit($year)) { // if <MONTH><YEAR> really has YEAR
        $location = "Home → Archive → " . ucfirst(htmlspecialchars($month)) . ' ' . htmlspecialchars($year);
    }

    foreach (array_slice($uri_parts, 1) as $uri_part) {
        $location .=  ' → ' . ucfirst($uri_part);
    }

    $parts = explode(' → ', $location);
    $last = array_pop($parts);
    $parts[] = "<b>$last</b>";
    $location = implode(' →  ', $parts);
?>