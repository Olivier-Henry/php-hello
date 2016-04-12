<?php


function setFlash($message){
    $_SESSION['flash'] = $message;
}

function getFlash(){
    if(isset($_SESSION['flash'])){
    $message = $_SESSION['flash'];
    unset($_SESSION['flash']);
    }else{
        $message = '';
    }
    return $message;
}
