<?php
    class RepeatCounter
    {
        function countRepeats($sentence, $word_search)
        {
            $appears = 0;
            $lowerCase_sentence =  strtolower($sentence);
            $word_array = explode(" ", $lowerCase_sentence);

            foreach($word_array as $word)
            {
                if(count_chars($word) == count_chars($word_search))
                {
                    $appears = $appears + 1;
                }
            }
            return $appears;
        }
    }
?>
