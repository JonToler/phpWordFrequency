<?php
    class WordFrequency
    {
        function word($word)
        {
            $word = trim($word, " !,.?@#$%^&*():;'/\"[]{}");
            return strtolower($word);
        }
        function sentence($sentence)
        {
            $Array = array();
            $sentenceArray = explode(" ",$sentence);
            for ($i=0; $i <= (count($sentenceArray) -1); $i++)
            {
                $Word = $this->word($sentenceArray[$i]);
                array_push($Array, $Word);
            }
            return $Array;
        }
        function Repeats($sentence, $word)
        {
            $word = $this->word($word);
            $sentence = $this->sentence($sentence);
            $searchArray = array_count_values($sentence);
            $wordCount = $searchArray[$word];
            return $wordCount;
        }
    }
?>
