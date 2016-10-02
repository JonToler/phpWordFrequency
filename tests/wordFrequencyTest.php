<?php
require_once "src/wordFrequency.php";
    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_word_remove_punctuation_and_whitespace()
        {
            $test_word = new WordFrequency;
            $input = 'wow! ';
            $result = $test_word->word($input);
            $this->assertEquals('wow', $result);
        }

        function test_make_array()
        {
            $test_makeArray = new WordFrequency;
            $input = "Wow, this is how one learns to code!";
            $result = $test_makeArray->sentence($input);
            $this->assertEquals(["wow", "this", "how", "one", "learns", "to", "code"], $result);
        }

        function test_word_frequency()
        {
            $test_wordFrequency = new WordFrequency;
            $sentence = 'Wow, this is how one learns to code! Wow, is it starting to rain again?';
            $word = "wow";
            $result = $test_wordFrequency->Repeats($sentence, $word);
            $this->assertEquals(2, $result);
        }
    }




 ?>
