    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/favicon.png">
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="none, noindex, nofollow, noai, noimageai, noarchive, nosnippet, noimageindex">
        <meta property="og:title" content="Basil Knill – Mini Games">
        <meta property="og:description" content=" Mini Games and Experiments from Basil Knill">
        <meta property="og:type" content="Website">
        <meta property="og:url" content="games.basilknill.ch">
        <meta property="og:site_name" content="Mini Games Basil Knill">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>BASIL KNILL | Selected Work</title>
    </head>

    <body>

        <div class="header" id="header">

            <?php
            $contactButtons = [
                // ["buttonBlackB", "buttonWhiteB"],
                // ["_black", "_self"]
                ["https://basilknill.ch/", "_blank", "buttonBlackA", "All Work"],
                ["assets/DE-Curriculum-Vitae-Basil-Knill.pdf", "_blank", "buttonBlackA", "CV DE"],
                ["assets/EN-Curriculum-Vitae-Basil-Knill.pdf", "_blank", "buttonBlackA", "CV EN"],
                ["mailto:basil@knill.eu", "_blank", "buttonBlackA", "basil@knill.eu"],
                ["tel:+41787250698", "_blank", "buttonBlackA", "078 725 06 98"],
                ["none", "none", "none", "none"],
                ["https://github.com/Aranciata99", "_blank", "buttonWhiteB", "Github"],
                ["https://www.instagram.com/basil.knill/", "_blank", "buttonWhiteB", "Instagram"],
                ["https://vimeo.com/aranchiata", "_blank", "buttonWhiteB", "Vimeo"],
                ["https://aranchiata.itch.io/", "_blank", "buttonWhiteB", "Itch.io"],
            ];

            foreach ($contactButtons as $content) {

                if ($content[0] != "none") {
                    echo
                    "<a href='$content[0]' target='$content[1]'>
                    <button class='$content[2]'>";

                    echo
                    strtoupper($content[3]);

                    echo
                    "</button>
                    </a>";
                } else {
                    
                    echo "<br>";
                }
            }
            ?>

        </div>

        <div class="imageContainer">

            <?php

            $genreFiles = glob("content/*", GLOB_ONLYDIR);
            $projectPaths = array();
            $projectNames = array();
            $projectLinks1 = array();
            $id2 = 0;

            foreach ($genreFiles as $genre) {

                $genreName = basename($genre);
                $genreNameAbs = $genreName;
                $genreName = substr($genreName, 3);
                $projectFiles = glob("content/$genreNameAbs/*", GLOB_ONLYDIR);

                foreach ($projectFiles as $index => $path) {
                    $imageNames = glob("$path/*");
                    $prNPath = basename($path);
                    $projectName = substr($prNPath, 3);

                    $id = 0;

                    echo "<div class='genreImageContainer'>";

                    foreach ($imageNames as $img) {

                        if (basename($img) === "-link-page.php") {
                            continue;
                        }
                        if (basename($img) === "-link-project.php") {
                            continue;
                        }

                        $genre = basename($img);

                        echo "<div class='imageBox' id='imageBox$id'>
                            <img src='$img' alt='Selected Work Image' loading='lazy'>
                        </div>";
                        $id++;
                    }

                    if (basename($imageNames[0]) === "-link-page.php") {
                        echo "
                        <div class='buttonContainer'>
                            <a href='";
                            require $imageNames[0];
                            echo
                            "' target='_blank'>
                                <button class='buttonBlackA'>";
                        echo
                        strtoupper($projectName);
                        echo
                        " ↗</button>
                            </a>";
                    } else {
                        echo "
                        <div class='buttonContainer'>
                        <button class='buttonBlackA' id='genreButtonNoLink'>";
                        echo
                        strtoupper($projectName);
                        echo
                        "</button>";
                    }

                    if (basename($imageNames[1]) === "-link-project.php") {
                        echo
                        "<a href='";
                        require $imageNames[1];
                        echo
                        "' target='_blank'>
                            <button class='buttonWhiteB'>";
                        echo strtoupper($genreName);
                        echo
                        " ↗</button>
                        </a>
                    </div>
                </div>";
                    } else {
                        echo
                        "<button class='buttonWhiteB' id='genreButtonNoLink'>";
                        echo strtoupper($genreName);
                        echo
                        "</button>
                    </div>
                </div>";
                    }
                }
            }

            ?>

        </div>

        <script src="./assets/scripts/script.js"></script>

        <!-- Imprint -->
        <!-- Website programming by © Basil Knill -->
        <!-- basilknill.ch -->
        <!-- Imprint -->

    </body>

    </html>