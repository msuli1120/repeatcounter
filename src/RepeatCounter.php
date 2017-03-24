<?php
  class RepeatCounter {

    public $user_word;
    public $user_sentence;

    function __construct ($word, $sentence) {
      $this->user_word = $word;
      $this->user_sentence = $sentence;
    }

    function countRepeats () {
      $word = strtolower($this->user_word);
      $sentence = strtolower($this->user_sentence);
      $output_array = array () ;

      $words_array = explode(' ', $sentence);

      foreach ($words_array as $value) {
        if($word === $value){
          array_push($output_array ,$value);
        }
      }
      return count($output_array);
    }

    function save () {
      array_push($_SESSION['lists'], $this);
    }

    static function getAll () {
      return $_SESSION['lists'];
    }

    static function deleteAll() {
      session_destroy();
    }
  }
?>
