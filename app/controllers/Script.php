<?php

class Script
{
    use Controller;

    function index()
    {
        $associazione = [
            'addominali' => 1,
            'bicipiti' => 2,
            'cardio' => 3,
            'dorsali' => 4,
            'gambe' => 5,
            'pettorali' => 6,
            'spalle' => 7,
            'tricipiti' => 8
        ];
        $dir = IMG . '/scheda/';
        $path = parse_url($dir, PHP_URL_PATH);
        //exit($_SERVER['DOCUMENT_ROOT'] . $path);
        $path = $_SERVER['DOCUMENT_ROOT'] . $path;
        $ffs = scandir($path);

        unset($ffs[array_search('.', $ffs, true)]);
        unset($ffs[array_search('..', $ffs, true)]);

        // prevent empty ordered elements
        if (count($ffs) < 1)
            return;
        //echo '<ol>';

        $categorie= [];
        //echo "<ul>";
        foreach ($ffs as $ff) {
            //$categorie[] = $ff;

            if (is_dir($path .'/'.  $ff)) {
                //echo "<li>$ff";
                $subs = scandir($path .'/'.  $ff);

                unset($subs[array_search('.', $subs, true)]);
                unset($subs[array_search('..', $subs, true)]);
                $count = 0;
                //echo "<ol>";
                foreach ($subs as $sub) {
                    $categorie[$ff][$count++] = $sub;
                    //echo "<li>$sub</li>";
                }
                //echo "</ol>";
                //echo "</li>";
            }
            //echo "</ul>";
        }

        $esercizio = new Esercizio();
        //print_r($categorie);
        foreach ($categorie as $c => $v){
            //echo "$c<br />";
                foreach ($v as $sub){
                    //echo " - $sub<br />";
                    $data = [
                        'id_categoria' => $associazione[$c],
                        'nome' => $sub,
                    ];
                    $esercizio->insert($data);
                }
                //echo "<hr>";
        }

    }

    function file_get_contents_utf8($fn)
    {
        $content = file_get_contents($fn);
        return mb_convert_encoding($content, 'UTF-8',
            mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
    }

}

