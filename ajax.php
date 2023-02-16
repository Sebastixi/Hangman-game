<?php
session_start();
//Enter a new Word on the session variable
if (isset($_POST['option']) && $_POST['option']=="enterWord"){
    $message = "word not entered";
    if (!isset($_SESSION['Words'])) {
        $_SESSION['Words'][0] = $_POST['word'];
        $message = "Word entered!";
    } else {

        $countWords = count($_SESSION['Words']);
        if($countWords>=10){
            $message = "You can only put 10 words";
        }else{
            $_SESSION['Words'][$countWords] = $_POST['word'];
            $message = "Word entered!";
        }
        
    }
    echo($message);
}

?>