<?php

function convertConsts($file) {
    $lines = file($file, FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
    $ignore = ['<?', '<?=', '<?php', '?>'];
    $array = [];

    foreach ($lines as $line) {
        preg_match_all("/(?:(?:\"(?:\\\\\"|[^\"])+\")|(?:'(?:\\\'|[^'])+'))/is", $line, $match, PREG_SET_ORDER);
        
        $matchCount = count($match);
        
        for ($x = 0; $x <= $matchCount-1; ++$x) {
            if ($x % 2 == 0) {
                $key = trim($match[$x][0], "'");
            }
            
            if (isset($key)) {
                $array[$key] = trim($match[$x][0], '"');
            }
        }
    }

    return json_encode($array, JSON_PRETTY_PRINT);
}

$files = glob('lang/English/{*.php,modules/*.php}', GLOB_BRACE);

foreach ($files as $file) {
    $jsonFile = str_replace('.php', '.json', $file);

    if (!file_exists($jsonFile)) {
        $fileContent = convertConsts($file);
        file_put_contents($jsonFile, $fileContent);

        echo "Created file: ".$jsonFile."\n";

        unlink($file);
    }
}