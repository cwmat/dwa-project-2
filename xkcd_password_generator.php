<?php
// Options passed in from client
// Defualt values
$min_words = 4;
$add_num = False;
$add_char = False;

/**
 * Unpack values from POST array
 *
 */
function unpack_post() {
  // Globals
  global $min_words;
  global $add_num;
  global $add_char;

  if (array_key_exists('min-words', $_POST)) {
    $min_words = $_POST['min-words'];
  }

  if (array_key_exists('add-num', $_POST)) {
    // $add_num = $_POST['add-num'];
    $add_num = True;
  }

  if (array_key_exists('add-char', $_POST)) {
    // $add_char = $_POST['add-char'];
    $add_char = True;
  }

  return [$min_words, (int)$add_num, (int)$add_char];
}

/**
 * Populate an array of words
 *
 */
function get_words_list() {
  $output = Array();
  $parsed_output = Array();

  // Pages to scrape for words
  $pages = Array(
    "http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html",
    "http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html",
    "http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html",
  );

  // Scrape web pages
  foreach($pages as $page) {
    $page_contents = file_get_contents($page);
    preg_match_all('#<li>(.*?)</li>#is', $page_contents, $out);
    $output = array_merge($output, $out[0]);
  }

  // Hinky way of removing <li> tag
  foreach ($output as $value) {
    $temp = str_replace("<li>", "", $value);
    $temp2 = str_replace("</li>", "", $temp);
    array_push($parsed_output, $temp2);
  }

  return $parsed_output;
}

get_words_list();







//
// function get_options() {
//   // Globals
//   global $min_words;
//   global $add_num;
//   global $add_char;
//
//   return [$min_words, $add_num, $add_char];
// }

// foreach($_POST as $key => $value) {
//   if (array_key_exists('min_words', $_POST)) {
//     $min_words = $_POST['min_words'];
//   }
//
//   if (array_key_exists('add_num', $_POST)) {
//     $add_num = $_POST['add_num'];
//   }
//
//   if (array_key_exists('add_char', $_POST)) {
//     $add_char = $_POST['add_char'];
//   }
// }

// function do_stuff() {
//   // return [$_POST["min_words"], $_POST["add_num"], $_POST["add_char"]];
//   if (array_key_exists('min-words', $_POST)) {
//     return $_POST['min-words'];
//   }
//   else {
//     return "TEST";
//   }
// }






 ?>
