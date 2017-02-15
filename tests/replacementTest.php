<?php
    require_once "src/Replacer.php";

    class ReplacerTest extends PHPUnit_Framework_TestCase
    {
        function test_WholeWord()
        {
            // Arrange
            $initialPhrase = "I am walking my Cat to the cathedral";
            $searchString = "cat";
            $replacementString = "dog";
            $test_case = new Replacer($initialPhrase,$searchString,$replacementString);
            // Act
            $result = $test_case->findAndReplaceWhole();
            // Assert
            $this->assertEquals("I am walking my dog to the cathedral", $result);
        }

        function test_PartialWord()
        {
            // Arrange
            $initialPhrase = "I am walking my Cat to the cathedral";
            $searchString = "cat";
            $replacementString = "dog";
            $test_case = new Replacer($initialPhrase,$searchString,$replacementString);
            // Act
            $result = $test_case->findAndReplacePartial();
            // Assert
            $this->assertEquals("I am walking my dog to the doghedral", $result);
        }


    }




?>
