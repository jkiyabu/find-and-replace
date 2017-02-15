<?php

    class Replacer
    {
        private $initialPhrase;
        private $searchString;
        private $replacementString;
        private $resultPhrase;

        function __construct($initialPhrase,$searchString,$replacementString)
        {
            $this->initialPhrase = $initialPhrase;
            $this->searchString = $searchString;
            $this->replacementString = $replacementString;
        }


        function findAndReplaceWhole()
        {
            $words = explode(" ", $this->initialPhrase);
            foreach ($words as &$word) {
                if (strtolower($word) == strtolower($this->searchString)) {
                    $word = $this->replacementString;
                }
            }
            unset($word);
            $words = implode(" ", $words);
            return $words;
        }


        function findAndReplacePartial()
        {
            $words = explode(" ", $this->initialPhrase);
            foreach ($words as &$word) {
                if (stristr($word,$this->searchString)) {
                    $word = str_replace(strtolower($this->searchString), $this->replacementString, strtolower($word));
                }
            }
            unset($word);
            $words = implode(" ", $words);
            return $words;
        }

    }



?>
