<?php


//Créer les liens des pages
/**
 * @param string $path
 * @return string
 */
function url(string $path): string
{
    return $_SERVER['SCRIPT_NAME'] . $path;
}



//fonction pour débuger le code (chercher la source du problème)
/**
 * @param $var
 * @return void
 */
function debug($var): void
{
    echo'<pre>';
    var_dump($var);
    echo'</pre>';

}
