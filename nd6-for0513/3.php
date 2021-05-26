<!-- Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()).
Visus skaitmenis stringe įdėkite į h1 tagą.
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu (h1 atsidaro prieš pirmą ir užsidaro po paskutinio)
Keitimui naudokite pirmo uždavinio funkciją ir preg_replace_callback(); -->

<?php

function toH1 ($text) : string{
    return "<h1 style=\"display: inline-block;\">$text</h1>";
}

$randString = md5(time());
echo $randString . '<br>';

function matchToH1 ($string) : string{
   return (toH1($string[0]));
}
echo preg_replace_callback("/\d+/", 'matchToH1', $randString);


