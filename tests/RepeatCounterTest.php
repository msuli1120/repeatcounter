<?php
  require_once "src/RepeatCounter.php";

  class RepeatCounterTest extends PHPUnit_Framework_TestCase {
    function testRepeatCounterOneWord () {
      //Arrange
      $input_word = "hi";
      $input_sentence = "hi";
      $test_repeatcounter = new RepeatCounter($input_word, $input_sentence);
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterTwoWords () {
      //Arrange
      $input_word = "hi";
      $input_sentence = "hi there";
      $test_repeatcounter = new RepeatCounter($input_word,$input_sentence);
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterInSentence () {
      //Arrange
      $input_word = "hi";
      $input_sentence = "hi there how are you";
      $test_repeatcounter = new RepeatCounter($input_word,$input_sentence);
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
    function testRepeatCounterMultipleRepeat () {
      //Arrange
      $input_word = "hi";
      $input_sentence = "hi there how are you, hi you, hi";
      $test_repeatcounter = new RepeatCounter($input_word,$input_sentence);
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(3, $result);
    }
    function testRepeatCounterForNumber () {
      //Arrange
      $input_word = "1";
      $input_sentence = "hi there how are you, hi you, 1";
      $test_repeatcounter = new RepeatCounter($input_word,$input_sentence);
      //Act
      $result = $test_repeatcounter->countRepeats($input_word, $input_sentence);
      //Assert
      $this->assertEquals(1, $result);
    }
  }

?>
