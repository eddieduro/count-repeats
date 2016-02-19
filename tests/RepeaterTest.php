<?php
    require 'src/Repeater.php';

    class RepeaterTest extends PHPUnit_Framework_TestCase
    {
        function test_stringToLower()
        {
            // Arrange
            $new_Repeater = new Repeater;
            $input = "wooHoO";

            // Act
            $result = $new_Repeater->countRepeats($input);

            // Assert
            $this->assertEquals(array("woohoo"), $result);
        }
        function test_sentenceSplit()
        {
            // Arrange
            $new_Repeater = new Repeater;
            $input = "hey you";

            // Act
            $result = $new_Repeater->countRepeats($input);

            // Assert
            $this->assertEquals(array('hey','you'), $result);
        }
    }
?>
