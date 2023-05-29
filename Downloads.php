<?php
// SETUP
$FILES_LOCATION = "./files";

// CODE
$files = scandir($FILES_LOCATION);

for($i = 2; $i < count($files); $i++){
    echo("<a href=\"$FILES_LOCATION/" . $files[$i] . "\" download>" . $files[$i] . "</a><br>");
}

?>