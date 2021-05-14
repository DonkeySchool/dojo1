<?php

class Finder
{
    public static function findQuestions(string $slug) : array
    {
        $qcmFolder = realpath(dirname(__FILE__)).'/../../var/qcms/'.$slug;

        $files = array_diff(
            scandir($qcmFolder), 
            array('..', '.')
        );

        $out = [];

        foreach ($files as $file) {
            $out[] = $qcmFolder.'/'.$file;
        }
        
        return $out;
    }
}