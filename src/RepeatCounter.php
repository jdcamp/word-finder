<?php
    class RepeatCounter{
      function CountRepeats($myWord, $myString)
      {
            $foundCounter = 0;
            $punctuation = ".,:\";[]{}?!())'";
            $myWord = strtoupper($myWord);
            $original = explode(" ", $myString);
            $myString = strtoupper($myString);
            $myString = explode(" ", $myString);
            $outputArray = array();
            foreach ($myString as $key => $myStringWords)
            {
                $compareString = trim($myStringWords, $punctuation);
                if($compareString == $myWord)
                {
                    array_push($outputArray, $key);
                    $outputArray[$key] = true;
                    ++$foundCounter;
                }else {
                    array_push($outputArray, $key);
                    $outputArray[$key] = false;
                }
            }
                return array('counter' => $foundCounter, "text_array" => $outputArray, "original_string_array"=> $original);
        }
    }
 ?>
