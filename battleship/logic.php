<?php
    $size = 6;
    $size++;
    // start the array at 1st index
    $aToj = array(1 => 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't');
    
    // for every row
    for ($row=0; $row<=$size; $row++) {
        // if first or last row print a space
        if ($row === 0 || $row === $size) {
            echo "  ";
            // then print numbers for each column
            for ($col=1; $col<$size; $col++) {
                echo "$col ";
            } 
        } else {
            // if row 2 to row size print a letter for each row
            echo "$aToj[$row] ";
            // print the desired whitespace
            for ($col=1; $col<$size; $col++) {
                echo "  ";
            } 
            // and print that letter again
            echo "$aToj[$row] ";
        }
        // finally change to new line
        echo "\n";
    }


?>