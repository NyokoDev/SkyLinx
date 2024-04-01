<?php
$file = fopen('mods_data.csv', 'r');

echo '<table>';
echo '<tr>';
echo '<th>Links</th>';
echo '<th>Mod Name</th>';
echo '<th>Download Link</th>';
echo '<th>Version</th>';
echo '<th>Notes</th>';
echo '<th>Hard Dependencies</th>';
echo '</tr>';

$firstLine = true; // Flag to skip the first line

while (($row = fgetcsv($file)) !== false) {
    if ($firstLine) {
        $firstLine = false;
        continue; // Skip the first line (header)
    }

    echo '<tr>';
    echo '<td><a href="' . $row[0] . '" target="_blank"><img src="UI/steam.png" alt="Steam" width="20" height="20"></a></td>';
    echo '<td>' . $row[1] . '</td>';
    echo '<td><form method="get" action="' . $row[2] . '"><button class="download-button" type="submit">Direct Download</button></form></td>';
    echo '<td>' . $row[3] . '</td>';
    echo '<td>' . $row[4] . '</td>';
    echo '<td>';

    // Loop through dependencies (assuming they come in pairs)
    for ($i = 5; $i < count($row); $i += 2) {
        // Check if both dependency name and link exist
        if (isset($row[$i]) && isset($row[$i + 1])) {
            echo '<form method="get" action="' . $row[$i + 1] . '"><button class="dependency-button" type="submit">' . $row[$i] . '</button></form>';
        }
    }

    echo '</td>';
    echo '</tr>';
}

fclose($file);
echo '</table>';
