<?php
//Show the words in the list group of start.php
function showWords(){
    if (!isset($_SESSION['Words'])) {
        $message = '<a class="list-group-item list-group-item-action wordList">Empty List</a>';
        echo($message);
    } else {
        $list = "";
        $countWords = count($_SESSION['Words']);
        for ($i = 0; $i < $countWords; $i++) {
            $list.= '<a class="list-group-item list-group-item-action wordList">'.$_SESSION['Words'][$i].'</a>' ;
        }
        echo($list);
        
    }
}

?>