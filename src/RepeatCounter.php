<?php
    class RepeatCounter{
      function CountRepeats($myWord, $myString)
      {
            $foundCounter = 0;
            $punctuation = array('.', '!', '?', ',', '(', ')', '[', ']',';', ':');
            $myWord = strtoupper($myWord);
            
            $myString = strtoupper($myString);
            $myString = str_split($myString);
            $myString = array_diff($myString, $punctuation);
            $myString = implode($myString);
            if($myString == $myWord)
            {
                ++$foundCounter;
            }
                return $foundCounter;
        }
    }
 ?>
