<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <!--
  Chaz Mateer HES DWA Project 2

  Sources:
    HTML5-Boilerplate (comes with jquery and modernizer): https://html5boilerplate.com/

    Pure CSS: http://purecss.io/

    Open source images: https://unsplash.com/

    Random Words:
      http://listofrandomwords.com/index.cfm?blist
        and
      http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html

  -->

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Chaz Mateer HES DWA Project 2</title>
  <meta name="description" content="Project 2 for HES DWA">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
  <!--[if lte IE 8]>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  <![endif]-->
  <!--[if gt IE 8]><!-->
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  <!--<![endif]-->
  <link rel="stylesheet" href="css/main.css">

  <!-- modernizr js -->
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>

  <!-- PHP -->
  <?php require "xkcd_password_generator.php" ?>
</head>
<body>
  <!-- Header -->
  <div class="pure-g is-center">
    <header class="pure-u-1">
      <h1>xkcd PASSWORD GENERATOR</h1>
    </header>
  </div>

  <!-- Wrapper -->
  <div class="pure-g wrapper is-center">

    <!-- Results -->
    <div class="pure-u-1 results-section">
      <div class="content">
        <h1 class="content-head">Here is your randomly generated password!</h1>
        <form class="pure-form">
          <input
            class="pure-input-1 pure-input-rounded"
            type="text"
            readonly
            placeholder="Temp"
            value=<?php echo get_xkcd_password();?>>
        </form>
      </div>
    </div>
  </div>

    <!-- Options -->
    <div class="pure-g wrapper is-center">
    <div class="pure-u-1 options-section">
      <h1 class="content-head">Options</h1>
    </div>
    <div class="pure-u-1 options-section">
      <form
      class="pure-form pure-form-stacked"
      method="POST"
      action="index.php">
        <fieldset>
          <div class="pure-g">

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="min-words">Number of words</label>
                <select id="min-words" class="pure-input-1-2" data-option="min-words" name="min-words">
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4" selected="selected">4</option>
                  <option value="5">5</option>
                </select>
              </div>

              <div class="pure-u-1 pure-u-md-1-3"></div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="case-opt">Case</label>
                <select id="case-opt" class="pure-input-1-2" data-option="case-opt" name="case-opt">
                  <option value="lowercase" selected="selected">All lowercase</option>
                  <option value="uppercase">All uppercase</option>
                </select>
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="add-num" class="pure-checkbox">
                  Add a number? <input id="add-num" type="checkbox" name="add-num" data-option="add-num">
                </label>
              </div>

              <div class="pure-u-1 pure-u-md-1-3"></div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="separator">Separator</label>
                <input
                id="separator"
                class="pure-u-23-24"
                type="separator"
                name="separator"
                data-option="separator"
                value="-"
                maxlength="1"
                size="4">
              </div>

              <div class="pure-u-1 pure-u-md-1-3">
                <label for="add-char" class="pure-checkbox">
                  Add Special characters? <input id="add-char" type="checkbox" name="add-char" data-option="add-char">
                </label>
              </div>

          <div class="pure-u-1 is-center">
            <button type="submit" class="pure-button pure-button-primary">GENERATE</button>
          </div>

        <!-- End sub grid -->
        </div>

        </fieldset>
      </form>
    </div>

  <!-- End main grid -->
  </div>

  <div class="pure-g wrapper is-center">
    <div class="pure-u-1 submit-section">
      <h1 class="content-head">The Back Story</h1>
      <p>
        xkcd, the self proclaimed "webcomic of romance, sarcasm, math, and language", produced a comic strip questioning the modern trend of password complexity titled “Password Strength”.  Their opinion is that there is a threshold at which the 'entropic' value (the level of randomness that would create difficulty for brute force password guessing) of a password gets overshadowed by its ability to actually be remembered by the user.  They go further to propose a strategy that provides both a higher value of entropy and an easier means by which to remember said password.
      </p>
      <p>
        The example that the comic presents to showcase their theory consists of a complex string of alphanumeric characters, “Tr0ub4dor83”, contrasted with a seemingly ridiculous statement, “correct horse battery staple”.  The logic is that the alphanumeric mashup password, given its shorter length, provides a much easier password for a brute force algorithm to guess versus the longer “semi-ridiculous” and multi-word password.  Based on their calculation, even without the random numbers/special characters, the longer password construct provides a much greater level of protection while also allowing for easier remembrance by simply creating an image in your mind of the phrase.  Their estimate depicts a brute force algorithm of 1,000 guess/second taking about 550 years to guess the longer easier-to-remember password, while at the same guesses/second, the shorter more complex password could potentially be cracked in about three days.
      </p>
      <p>
        Check out the comic to see for yourself and have fun playing around with this password generator inspired by the comic!
      </p>
    </div>
  </div>

  <!-- Footer -->
  <footer class="pure-g is-center">
    <div class="pure-u-1">
      <h4>Check out these cool sites that inspired/supported this project!</h4>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <a href="http://listofrandomwords.com/index.cfm?blist" target="_blank">Random Words!</a>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <a href="http://www.paulnoll.com/Books/Clear-English/words-01-02-hundred.html" target="_blank">More Random Words</a>
    </div>
    <div class="pure-u-1 pure-u-md-1-3">
      <a href="https://xkcd.com/936/" target="_blank">xkcd Comic Strip</a>
    </div>
  </footer>

  <!-- Import JS May add JS features in the future -->
  <!-- <script src="js/vendor/jquery-1.11.3.min.js"></script>
  <script src="js/main.js"></script> -->
</body>
</html>
