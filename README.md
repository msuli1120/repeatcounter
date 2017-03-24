# _**Repeat Counter**_

#### _A Silex app that returns how frequently a word appears in a given string, 03/24/2017_

#### _By Xing Li_

## Description

_a website in Silex that returns how frequently a word appears in a given string. The user should input both the word and the string of words to check._

## Setup

* _clone the repository_
* _change directory to project folder_
* _open terminal and run composer install_
* _change directory to web folder and run php -S localhost:8000_
* _in URL type localhost:8000_
* _try it out_

## Specs

* _take user input in start with a letter_
  1. _input: a_
  2. _output: a_
* _take another input in_
  1. _input: b_
  2. _output: b_
* _compare the two inputs and return the result_
  1. _output: false_
* _above just for trying out the program can compare 2 letters_
***************************************************************************
* _start to take in two 2-letter words_
  1. _program split the words to single letters_
    * _input: hi ha_
    * _output: h i, h a_
  2. _compare each letter to see if there is a match_
    * _input: h i , h a_
    * _output: h_
* _above for trying out the program can filter the same letter out and return it_
****************************************************************************
* _start to try taking in 3-letter words_
  1. _program split the words to single letters for the both 3-letter-word_
    * _input: the tho_
    * _output: t h e, t h o_
  2. _program compare the split letters and return the match_
    * _input: t h e, t h o_
    * _output: t h_
  3. _program counts the output above_
    * _input: t h_
    * _output: 2_
* _above for testing the program can count the match_
*****************************************************************************
* _trying words in a sentence_
  1. _take in a word and sentence and seperate by each word_
    * _input: hi, hi there_
    * _output: hi, hi there_
  2. _compare if there is a match_
    * _input: hi, hi there_
    * _output: hi_
  3. _count how many return_
    * _input: hi_
    * _output: 1_
* _above for a word in a sentence_


[click here](https://github.com/msuli1120/repeatcounter.git) to check out the project

### License
*This application is licensed under Xing Li's name*
copyright (c) 2017 **_Xing Li_**
# repeatcounter
