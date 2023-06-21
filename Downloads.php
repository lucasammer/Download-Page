<!DOCTYPE html>
<html lang="en">
<head>
    <title>Downloads</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Downloads</h1>
    <?php
        // SETUP
        $FILES_LOCATION = "./files";

        // CODE
        $files = scandir($FILES_LOCATION);

        for($i = 2; $i < count($files); $i++){
            echo("<a href=\"$FILES_LOCATION/" . $files[$i] . "\" download>" . $files[$i] . "</a><br>");
        }
    ?>
</div>
</body>
</html>

