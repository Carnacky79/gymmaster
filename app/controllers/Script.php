<?php

class Script
{
    use Controller;

    function index()
    {
        $dir = 'C:\Apache24\htdocs\gym\public\imgs\esercizi';
        $ffs = scandir($dir);

        unset($ffs[array_search('.', $ffs, true)]);
        unset($ffs[array_search('..', $ffs, true)]);

        // prevent empty ordered elements
        if (count($ffs) < 1)
            return;
        //echo '<ol>';

        $esercizi = [];

        foreach ($ffs as $ff) {
            if (is_dir($dir . '/' . $ff)) {
                $subs = scandir($dir . '/' . $ff);

                unset($subs[array_search('.', $subs, true)]);
                unset($subs[array_search('..', $subs, true)]);
                $count = 0;
                foreach ($subs as $sub) {
                    if (is_dir($dir . '/' . $ff . '/' . $sub)) {
                        $esercizi[$ff][$count++] = $sub;
                    }
                }
            }

        }
        $count = 1;

        foreach ($esercizi as $key => $value) {
            $esercizio = new Esercizio();
            foreach ($value as $es) {
                $data = [
                    'nome' => $es,
                    'id_categoria' => $count,
                ];
                $esercizio->insert($data);
            }
            $count++;
        }
    }

    function file_get_contents_utf8($fn)
    {
        $content = file_get_contents($fn);
        return mb_convert_encoding($content, 'UTF-8',
            mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
    }

}

