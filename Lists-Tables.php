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
                $list.= '<button class="list-group-item list-group-item-action wordList" id="'.$_SESSION['Words'][$i].'">'.$_SESSION['Words'][$i].'</button>' ;
            }
            echo($list);
            
        }
    }

    //Return the coun of the total words in the variable
    function returnCountWords(){
        $countWords = count($_SESSION['Words']);
        echo($countWords);
    }

    //Print the words confirmed with "Count" to know what word is the selected
    function printWord(){
        if (!isset($_SESSION['Count'])) {
            $_SESSION['Count'] = 0;
        } else {
            $count = $_SESSION['Count'];
            $word = $_SESSION['Words'][$count];
            $arrayWord = str_split($word);
            $table = "<thead> <tr>";
            for ($i = 0; $i < count($arrayWord); $i++) {
                $table.= '<td> <input class="form-control" type="hidden" value="'.$arrayWord[$i].'"></td>' ;
            }
            echo($table."</tr> </thead>");
        }
    }


?>