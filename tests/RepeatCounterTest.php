<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase {
    function testRepeatCounterOneWord () {
      //Arrange
      $test_repeatcounter = new RepeatCounter;
      $input_word = "hi";
      $input_sentence = "hi";
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterTwoWords () {
      //Arrange
      $test_repeatcounter = new RepeatCounter;
      $input_word = "hi";
      $input_sentence = "hi there";
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterInSentence () {
      //Arrange
      $test_repeatcounter = new RepeatCounter;
      $input_word = "hi";
      $input_sentence = "hi there how are you";
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterMultipleRepeat () {
      //Arrange
      $test_repeatcounter = new RepeatCounter;
      $input_word = "hi";
      $input_sentence = "hi there how are you, hi you, hi";
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(3, $result);
    }
    function testRepeatCounterForNumber () {
      //Arrange
      $test_repeatcounter = new RepeatCounter;
      $input_word = "1";
      $input_sentence = "hi there how are you, hi you, 1";
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
  }

?>
