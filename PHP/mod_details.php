<?php

echo 'hello, ninjas'

    function getWorkshopItemId($modName) {
        $steamCommunityUrl = "https://steamcommunity.com/workshop/browse/?appid=255710&searchtext=" . urlencode($modName);

        // Initialize cURL session
        $ch = curl_init();
        
        // Set cURL options
        curl_setopt($ch, CURLOPT_URL, $steamCommunityUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        
        // Execute cURL session and get the HTML content
        $html = curl_exec($ch);

        // Check if cURL request was successful
        if ($html === false) {
            die('Error fetching Steam Community page');
        }

        // Close cURL session
        curl_close($ch);

        // Use DOMDocument to parse HTML
        $doc = new DOMDocument();
        libxml_use_internal_errors(true);
        $doc->loadHTML($html);
        libxml_clear_errors();

        // Extract the Workshop item ID
        $elements = $doc->getElementsByTagName('div');
        foreach ($elements as $element) {
            $classAttribute = $element->getAttribute('class');
            if (strpos($classAttribute, 'workshopItem') !== false) {
                $dataItemID = $element->getAttribute('data-itemid');
                if (!empty($dataItemID)) {
                    return $dataItemID;
                }
            }
        }

        return null; // Return null if Workshop item ID is not found
    }

    // Replace 'Your Mod Name' with the actual mod name you want to search for
    $modNameToSearch = 'Your Mod Name';

    // Get Workshop item ID
    $workshopItemId = getWorkshopItemId($modNameToSearch);
?>