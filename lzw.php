<?php include 'color-conversion task/yuvRgb.php'; ?>
<?php

function lzw_compress($source)
{
    // compression
    $dictionary = array_flip(range("\0", "\xFF"));
    $image = "";
    $codes = array();
    for ($i = 0; $i <= strlen($source); $i++) {
        $x = substr($source, $i, 1);
        if (strlen($x) && isset($dictionary[$image . $x])) {
            $image .= $x;
        } elseif ($i) {
            $codes[] = $dictionary[$image];
            $dictionary[$image . $x] = count($dictionary);
            $image = $x;
        }
    }

    $dictionary_count = 256;
    $bits = 8;
    $return = "";
    $rest = 0;
    $rest_length = 0;
    foreach ($codes as $code) {
        $rest = ($rest << $bits) + $code;
        $rest_length += $bits;
        $dictionary_count++;
        if ($dictionary_count >> $bits) {
            $bits++;
        }
        while ($rest_length > 7) {
            $rest_length -= 8;
            $return .= chr($rest >> $rest_length);
            $rest &= (1 << $rest_length) - 1;
        }
    }
    return $return . ($rest_length ? chr($rest << (8 - $rest_length)) : "");
}

function lzw_decompress($source)
{
    // convert binary string to codes
    $dictionary_count = 256;
    $bits = 8; // ceil(log($dictionary_count, 2))
    $codes = array();
    $rest = 0;
    $rest_length = 0;
    for ($i = 0; $i < strlen($source); $i++) {
        $rest = ($rest << 8) + ord($source[$i]);
        $rest_length += 8;
        if ($rest_length >= $bits) {
            $rest_length -= $bits;
            $codes[] = $rest >> $rest_length;
            $rest &= (1 << $rest_length) - 1;
            $dictionary_count++;
            if ($dictionary_count >> $bits) {
                $bits++;
            }
        }
    }

    // decompression
    $dictionary = range("\0", "\xFF");
    $return = "";
    $image = "";
    foreach ($codes as $i => $code) {
        $element = $dictionary[$code];
        if (!isset($element)) {
            $element = $image . $image[0];
        }
        $return .= $element;
        if ($i) {
            $dictionary[] = $image . $element[0];
        }
        $image = $element;
    }
    return $return;
}

function Image($source)
{
    $imgInfo = getimagesize($source);
    $imgInfo['image/jpeg'];
    $image = imagecreatefromjpeg($source);

    imagejpeg($image);
}
