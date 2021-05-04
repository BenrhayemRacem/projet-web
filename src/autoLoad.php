<?php
function load($className)
{
    include_once "PHP_Classes/$className.php";
}
spl_autoload_register('load') ;
