<?php
  class RepeatCounter {

    public $user_word;
    public $user_sentence;

    function __construct ($word, $sentence) {
      $this->user_word = $word;
      $this->user_sentence = $sentence;
    }

    function countRepeats () {
      $non_letters_array = array ('"', '\'', '!', '.', ',', '@', '#', '$', '%', '^', '&', '*', '(', ')', ':', ';', '<', '>', '?', '/', '|', '~', '`');
      $filter_word = str_replace($non_letters_array, ' ', $this->user_word);
      $filter_sentence = str_replace($non_letters_array, ' ', $this->user_sentence);
      $word = strtolower($filter_word);
      $sentence = strtolower($filter_sentence);
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
