<?php
    class RepeatCounter{
      function CountRepeats($myWord, $myString)
      {
            $foundCounter = 0;
            //$punctuation = array('.', '!', '?', ',', '(', ')', '[', ']',';', ':');
            $punctuation = ".,:\";[]{}?!())'";
            $myWord = strtoupper($myWord);
            $myString = strtoupper($myString);
            $myString = explode(" ", $myString);
            foreach ($myString as $myStringWords) {
                $myStringWords = trim($myStringWords, $punctuation);
                //$myStringWords = array_diff($myStringWords, $punctuation);
                //$myStringWords = implode($myStringWords);
                if($myStringWords == $myWord)
                {
                    ++$foundCounter;
                }
            }
                return $foundCounter;
        }
    }
 ?>
