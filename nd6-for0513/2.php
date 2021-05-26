<!-- Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas,
įterpiamas į h tagą, o antrasis tago numeris (1-6).
Rašydami šią funkciją remkitės pirmame uždavinyje parašytą funkciją; -->

<?php

function textToH1 ($text) : string{
    return "<h1>$text</h1>";
}

function textToHeading ($text, $headingSize) : string {
    if($headingSize >= 1 && $headingSize <=6){
        return str_replace(1, $headingSize, textToH1("$text"));
    }
}

echo textToHeading ('HELLO', 6);