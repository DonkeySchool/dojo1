<?php

require_once realpath(dirname(__FILE__)).'/../Model/Finder.php';
require_once realpath(dirname(__FILE__)).'/../View/View.php';

class QCMController
{
    public static function getAction(string $slug) 
    {
        $files = Finder::findQuestions($slug);

        echo View::renderQCM($files);
    }
}