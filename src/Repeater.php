<?php
    class Repeater
    {
        function countRepeats($sentence)
        {
            $lowerCase_sentence =  strtolower($sentence);
            $word_array = explode(" ", $lowerCase_sentence);

            return $word_array;
        }
    }
?>
