<?php
    class RepeatCounter{
      function CountRepeats($myWord, $myString)
      {
            $foundCounter = 0;
            $punctuation = ".,:\";[]{}?!())'";
            $myWord = strtoupper($myWord);
            $myString = strtoupper($myString);
            $myString = explode(" ", $myString);
            foreach ($myString as $myStringWords)
            {
                $myStringWords = trim($myStringWords, $punctuation);
                if($myStringWords == $myWord)
                {
                    ++$foundCounter;
                }
            }
                return $foundCounter;
        }
    }
 ?>
