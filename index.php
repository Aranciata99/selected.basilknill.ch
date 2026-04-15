    <?php
    $px = "px";
    ?>




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

        <?php
        // $pfad = "content/Editorials/Biennale Bregaglia";
        // $filename = basename(dirname($pfad));
        // echo $filename;
        ?>

        <!-- // Get an array of all files in the directory using glob()
    $files = glob('content/*');
    $genres = array();
    //$genres = basename(dirname($files[0]));

    foreach ($files as $file) {
        array_push($genres, basename(dirname($file)));
    } -->

        <?php
        // $genreFiles = glob("content/*", GLOB_ONLYDIR);
        // $projects = array();

        // foreach ($genreFiles as $file) {
        //     array_push($projects, basename($file));
        // }

        // $projectFiles = glob("content/$projects[0]/*", GLOB_ONLYDIR);
        // echo basename($projectFiles[0]);
        // echo basename(count($projectFiles[0]));

        // for ($i = 0; $i < count($genres); $i++) {

        // }  

        // $projectFiles = glob("content/*/*", GLOB_ONLYDIR);
        // $projects = array();

        // foreach ($projectFiles as $file) {
        //     array_push($projects, basename($file));
        // }

        // $sites = glob("./sites/*.php");

        //$projectFiles = glob("content/$genres[0]/*", GLOB_ONLYDIR);

        // echo $projects[7];
        // echo count($genres);
        // echo count($projects);

        ?>

        <div class="buttonContainer">
            <?php

            $genreFiles = glob("content/*", GLOB_ONLYDIR);
            $projectPaths = array();

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
                    echo "<button class='buttonBlackB'>$projectName</button> <br>";
                }

                echo "</div>
            </div>";
            }
            ?>
        </div>

        <div class="imageContainer">

            <?php

            $countX;
            $countY;

            foreach ($projectPaths as $path) {
                $imageNames = glob("$path/*");
                foreach ($imageNames as $img) {
                    $countX = rand(0, 1500);
                    $countY = rand(0, 500);
                    echo "<div class='imageBox' style='top: $countY$px; left: $countX$px'>
                <img src='$img' alt=''>
                </div>";

                }
            }

            //$imageName = glob("content/*/$projectNameAbs/*", GLOB_ONLYDIR);


            ?>

        </div>

        <script src="./assets/scripts/script.js"></script>

        <!-- Imprint -->
        <!-- Website programming by © Basil Knill -->
        <!-- basilknill.ch -->
        <!-- Imprint -->

    </body>

    </html>