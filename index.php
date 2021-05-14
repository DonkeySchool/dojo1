<?php

require_once 'src/Controller/QCMController.php';

if (preg_match('/^\/(\w+)$/', $_SERVER['REQUEST_URI'], $matches)) {
    return QCMController::getAction($matches[1]);
}

throw new \InvalidArgumentException('404');