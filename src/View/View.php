<?php

class View
{
    public static function renderQCM(array $files)
    {
        include realpath(dirname(__FILE__)).'/templates/qcm.php';
    }
}