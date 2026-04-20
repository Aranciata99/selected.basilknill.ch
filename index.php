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

        <div class="header">

            <?php
            $contactButtons = [
                // ["buttonBlackB", "buttonWhiteB"],
                // ["_black", "_self"]
                ["https://basilknill.ch/", "_blank", "buttonBlackA", "All Work – About"],
                ["https://basilknill.ch/about", "_blank", "buttonBlackA", "Curriculum Vitae"],
                ["mailto:basil@knill.eu", "_blank", "buttonBlackA", "basil@knill.eu"],
                ["tel:+41787250698", "_blank", "buttonBlackA", "078 725 06 98"],
                ["none", "none", "none", "none"],
                ["https://github.com/Aranciata99", "_blank", "buttonWhiteB", "Github"],
                ["https://www.instagram.com/basil.knill/", "_blank", "buttonWhiteB", "Instagram"],
                ["https://vimeo.com/user84296841", "_blank", "buttonWhiteB", "Vimeo"],
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

                        $genre = basename($img);

                        echo "<div class='imageBox' id='imageBox$id'>
                <img src='$img' alt=''>
                </div>";
                        $id++;
                    }

                    echo "
                <div class='buttonContainer'>
                <a href='https://basilknill.ch/' target='_blank'>
                        <button class='buttonBlackA'>";
                    echo
                    strtoupper($projectName);
                    echo
                    " ↗
                        </button>
                </a>
                <button class='buttonWhiteB'id=genreButton>";

                    echo $genreName;

                    echo
                    "</button>
                    <button class='buttonWhiteB' id=infoButton$id2 style='position: absolute; right: 0; display: none;';>
                    info
                    </button>
                </div>
            </div>";

                $id2++;
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