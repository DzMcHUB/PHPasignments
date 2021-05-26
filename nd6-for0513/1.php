<!-- Parašykite funkciją, kurios argumentas būtų tekstas,
kuris yra įterpiamas į h1 tagą; -->

<?php

function toH1 ($text) : string{
    return "<h1>$text</h1>";
}

echo toH1('HELLO');