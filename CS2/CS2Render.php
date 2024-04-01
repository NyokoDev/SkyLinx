<div class="image-block">
    <?php
    // Read the CSV file into an array
    $csv = array_map('str_getcsv', file('./CS2/CS2ModsSheet.csv'));
    
    // Remove the header row
    $headers = array_shift($csv);
    
    // Loop through each row in the CSV file
    foreach ($csv as $row) {
        $steamLink = $row[0];
    $name = $row[1];
    $DownloadLink = $row[2];
    $version = $row[3];
    $ImageLink = $row[4];
    
        
        

// Output the HTML with the extracted data
echo '<div class="image-item">';
echo '<a href="' . $steamLink . '" target="_blank" class="steam-link">';
echo '<img src="UI/thunderstore.png" alt="Steam" class="steam-icon">'; // Steam image button at 20x20
echo '</a>'; // Closing anchor tag
echo '<a href="' . $DownloadLink . '" target="_blank" class="steam-link">';
echo '<img src="' . $ImageLink . '" alt="' . $name . '">';
echo '</a>'; // Closing anchor tag
echo '<h3>' . $name . '</h3>';
echo '<p>Version: ' . $version . '</p>';
echo '</div>';

    }

    
    ?>
</div>
