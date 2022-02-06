

<?php

    require_once 'vendor/autoload.php';
    use App\classes\StringWordCounter;

    $stringWordCounter = new StringWordCounter();
    $stringWordCounter->index();
