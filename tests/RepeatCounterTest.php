<?php
    require 'src/Repeater.php';

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_stringToLower()
        {
            // Arrange
            $new_Repeater = new RepeatCounter;
            $input = "wooHoO";
            $input2 = "yo";
            // Act
            $result = $new_Repeater->countRepeats($input, $input2);

            // Assert
            $this->assertEquals(0, $result);
        }
        function test_sentenceSplit()
        {
            // Arrange
            $new_Repeater = new RepeatCounter;
            $input = "hey you";
            $input2 = "yo";

            // Act
            $result = $new_Repeater->countRepeats($input, $input2);

            // Assert
            $this->assertEquals(0, $result);
        }

        function test_searchMatchingWords()
        {
            // Arrange
            $new_Repeater = new RepeatCounter;
            $input = "hey you hey hey";
            $input2 = "hey";
            // Act
            $result = $new_Repeater->countRepeats($input, $input2);

            // Assert
            $this->assertEquals(3, $result);
        }
    }
?>
