<?php

require_once '../vendor/autoload.php';
use App\classes\StringWordCounter;

if(isset($_POST['btn'])) {

    $stringWordCounter = new StringWordCounter($_POST);
    $result = $stringWordCounter->getWordString();
    include 'index.php';
}else{
    header('Location: index.php');
}
