<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <?php
    function no_repeat($string) {
    $chr = null;
    for 
    ($i = 0; $i <= strlen($string); $i++) {
    if
    (substr_count($string, substr($string, $i, 1)) == 1) {
    return substr($string, $i, 1);
    }
    }
    }

    echo no_repeat("AABBC")."\n";
    echo no_repeat("AABBCCDEEFF")."\n";
    ?>
</body>
</html>
