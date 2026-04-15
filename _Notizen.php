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