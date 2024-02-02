<?php

function incrementPageCounter() {
    // Define the path to the views.txt file
    $filePath = 'data/vues.txt';

    // Read the current count from the file
    $currentCount = (int) file_get_contents($filePath);

    // Increment the count
    $newCount = $currentCount + 1;

    // Write the updated count back to the file
    file_put_contents($filePath, $newCount);

    // Return the updated count (optional)
    return $newCount;
}

// Call the function to increment the counter
$pageViews = incrementPageCounter();

// Use $pageViews as needed, for example, to display the count
echo "Total pages vues: $pageViews";

?>
