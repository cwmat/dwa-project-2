<?php
// Options passed in from client
// Defualt values
$min_words = 4;
$add_num = False;
$add_char = False;
$case_opt = "lowercase";
$separator = "-";

// Pages to scrape for words - Removed due to slow load time
// $pages = Array(
//   "http://www.paulnoll.com/Books/Clear-English/words-29-30-hundred.html",
//   "http://www.paulnoll.com/Books/Clear-English/words-03-04-hundred.html",
//   "http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html",
// );

$pages = Array(
  "words.txt",
);

/**
 * Unpack values from POST array
 *
 */
function unpack_post() {
  // Globals
  global $min_words;
  global $add_num;
  global $add_char;
  global $case_opt;
  global $separator;

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

  if (array_key_exists('separator', $_POST)) {
    $separator = $_POST['separator'];
  }

  if (array_key_exists('case-opt', $_POST)) {
    $case_opt = $_POST['case-opt'];
  }

  // Mostly just for testing
  return [$min_words, (int)$add_num, (int)$add_char, $separator, $case_opt];
}

/**
 * Populate an array of words
 *
 * @param pages - an array of web pages to scrape for words
 */
function get_words_list($pages) {
  $output = Array();
  $parsed_output = Array();

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

/**
 * Add a random number to a random array index
 *
 */
function add_number($in_array) {
  $random_num = rand(1, 9);
  $random_idx = rand(0, count($in_array) - 1);

  $in_array[$random_idx] = $in_array[$random_idx] . $random_num;

  return $in_array;
}

/**
 * Add a random number to a random array index
 *
 */
function add_char($in_array) {
  $special_chars = ["!", "@", "#", "$", "%", "^", "&", "*"];
  $random_char = $special_chars[rand(0, count($special_chars) - 1)];
  $random_idx = rand(0, count($in_array) - 1);

  $in_array[$random_idx] = $in_array[$random_idx] . $random_char;

  return $in_array;
}

/**
 * Convert the in_array elements to the specified case
 *
 * @param case - The desired case for all array elements (all lower or all upper))
 * @param in_array - The input array that the case change should occur on
 */
function handle_case($case, &$in_array) {
  foreach ($in_array as &$value) {
    if ($case == "uppercase") {
      $value = strtoupper($value);
    } else {
      $value = strtolower($value);
    }
  }
}

/**
 * Get a ranomized password
 *
 */
function get_xkcd_password() {
  // Globals
  global $min_words;
  global $add_num;
  global $add_char;
  global $case_opt;
  global $separator;
  global $pages;

  unpack_post();
  $words_list = get_words_list($pages);
  $xkcd_password = Array();

  for ($i = 1; $i <= $min_words; $i++) {
    $temp_rand_idx = rand(0, count($words_list) - 1);
    array_push($xkcd_password, trim($words_list[$temp_rand_idx]));
    unset($words_list[$temp_rand_idx]);
  }

  // Check special conditions
  // Check add num
  if ($add_num) {
    $xkcd_password = add_number($xkcd_password);
  }

  // Check add special character
  if ($add_char) {
    $xkcd_password = add_char($xkcd_password);
  }

  // Check case
  handle_case($case_opt, $xkcd_password);

  return implode($separator, $xkcd_password);
 }

 // echo get_xkcd_password();







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
