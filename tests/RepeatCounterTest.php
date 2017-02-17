<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_match_word()
        {
            $findWord = 'foo';
            $stringToSearch = "Foo!";
            $newCounter = new RepeatCounter();

            $result = $newCounter->CountRepeats($findWord, $stringToSearch);

            $this->assertEquals(1, $result);
        }

        function test_match_in_sentence()
        {
            $findWord = 'bar';
            $stringToSearch = "The word is BaR.";
            $newCounter = new RepeatCounter;

        $result = $newCounter->CountRepeats($findWord, $stringToSearch);

            $this->assertEquals(1, $result);
        }
        
        function test_match_multiple_in_sentence()
        {
            $findWord = 'foo';
            $stringToSearch = "The word is FOO. It is common for the FOO the live in a cave near the FOO mountains.";
            $newCounter = new RepeatCounter;

        $result = $newCounter->CountRepeats($findWord, $stringToSearch);

            $this->assertEquals(3, $result);
        }

    }

 ?>
