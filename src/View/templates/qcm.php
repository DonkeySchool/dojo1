<h1>Bienvenue</h1>
<?php

foreach ($files as $file) {
    echo file_get_contents($file)."\n";
}