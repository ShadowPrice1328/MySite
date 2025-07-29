<?php
$validMonths = [
    'january','february','march','april','may','june',
    'july','august','september','october','november','december'
];

$location = 'Home';

if (count($uri_parts) > 0) {
    $part0 = strtolower($uri_parts[0]);

    $year = substr($part0, -4);
    $month = substr($part0, 0, -4);

    if (strlen($year) === 4 && ctype_digit($year) && in_array($month, $validMonths)) {
        $location .= " → Archive → " . ucfirst($month) . " " . $year;

        foreach (array_slice($uri_parts, 1) as $uri_part) {
            $location .= " → " . ucfirst(htmlspecialchars($uri_part));
        }
    } else {
        $location .= " → " . ucfirst(htmlspecialchars($uri_parts[0]));
    }
}

$parts = explode(' → ', $location);
$last = array_pop($parts);
$parts[] = "<b>$last</b>";
$location = implode(' → ', $parts);
?>
