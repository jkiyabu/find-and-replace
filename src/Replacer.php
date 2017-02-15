<?php

    class Replacer
    {
        private initialPhrase;
        private searchString;
        private replacementString;
        private resultPhrase;

        function __construct($initialPhrase,$searchString,$replacementString)
        {
            $this->initialPhrase = $initialPhrase;
            $this->searchString = $searchString;
            $this->replacementString = $replacementString;
        }

    }



?>
