<!-- 
 
Web
– Bildschirm irgendwie ganz füllen –> Raster grid oder flex

Mobile
– slideshow on click && on slide: bild darüberschieben

– Links zu meiner Seite, Links zum Projekt direkt

– Responsiv click etc
– Titel lesbar? In einen Button?
– OnLoad Gif like durchgehen (Video Rückblicke ZHDK?)
– Weitere Buttons und Links zur website

– Beschriebe?? 
– Link testen fallback from basilknill.ch

-->

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <link rel="icon" type="image/png" href="../assets/favicon.png">
        <link rel="stylesheet" type="text/css" href="../assets/css/index.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="robots" content="index, follow, noai, noimageai">
        <meta property="og:title" content="Basil Knill – Mini Games">
        <meta property="og:description" content=" Mini Games and Experiments from Basil Knill">
        <meta property="og:type" content="Website">
        <meta property="og:url" content="games.basilknill.ch">
        <meta property="og:site_name" content="Mini Games Basil Knill">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>BASIL KNILL | Selected Work</title>
    </head>

    <body>

        <div class="buttonContainer">

            <?php

            $genreFiles = glob("content/*", GLOB_ONLYDIR);
            $projectPaths = array();
            $projectNames = array();

            foreach ($genreFiles as $genre) {

                $genreName = basename($genre);
                $genreNameAbs = $genreName;
                $genreName = substr($genreName, 3);
                $projectFiles = glob("content/$genreNameAbs/*", GLOB_ONLYDIR);
                
                echo "<div class='genreContainer'>
                <div class='small'> $genreName </div>
                <div>";

                foreach ($projectFiles as $project) {

                    $projectName = basename($project);
                    $projectNameAbs = $projectName;
                    $projectName = substr($projectName, 3);
                    array_push($projectPaths, $project);
                    array_push($projectNames, $projectName);
                    echo "<button class='buttonBlackB'>$projectName</button> <br>";
                }

                echo "</div>
            </div>";
            }
            ?>
        </div>

        <div class="imageContainer">

            <?php

            foreach ($projectPaths as $index => $path) {
                $imageNames = glob("$path/*");

                $id = 0;
                
                echo "<div class='genreImageContainer'>";
                
                foreach ($imageNames as $img) {
                    echo "<div class='imageBox' id='imageBox$id'>
                <img src='$img' alt=''>
                </div>";
                $id++;
                }

                echo "</div>";
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