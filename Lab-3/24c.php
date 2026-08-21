<?php
$source = 'D:/Downloads/IMG_3997.jpg';
$destination = 'D:/Downloads/OneDrive/Documents/Desktop/Scripting Language/Lab-3/IMG_3997.jpg';

if (copy($source, $destination)) {
    echo "Image copied successfully.";
} else {
    echo "Failed to copy image.";
}
?>