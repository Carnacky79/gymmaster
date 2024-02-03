<?php
$url = 'https://www.assocral.org/elenco-conv.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$return = curl_exec($ch);

//echo $return;
$string = file_get_contents($url);

if ($string === FALSE) {
    echo "Could not read the file.";
} else {
    echo $string;
}
