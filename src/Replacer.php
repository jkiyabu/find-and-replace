<?php

    class Replacer
    {
        private $initialPhrase;
        private $searchString;
        private $replacementString;
        private $resultPhraseWhole;
        private $resultPhrasePartial;

        function getInitialPhrase()
        {
            return $this->initialPhrase;
        }

        function getSearchString()
        {
            return $this->searchString;
        }

        function getReplacementString()
        {
            return $this->replacementString;
        }

        function getResultPhraseWhole()
        {
            return $this->resultPhraseWhole;
        }

        function getResultPhrasePartial()
        {
            return $this->resultPhrasePartial;
        }


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
            $this->resultPhraseWhole = $words;
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
            $this->resultPhrasePartial = $words;

        }

    }



?>
