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

    Icons: http://fortawesome.github.io/Font-Awesome/

    Open source images: https://unsplash.com/

    Comical filler text: http://www.cheeseipsum.co.uk/

  -->

  <!-- Meta -->
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Chaz Mateer HES DWA Project 2</title>
  <meta name="description" content="Project 2 for HES DWA">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
            placeholder="Temp"
            value="The values!" readonly
            ><br>
        </form>
      </div>
    </div>

    <!-- Options -->
    <div class="pure-u-1 options-section">
      <h1 class="content-head">Options</h1>
    </div>
    <div class="pure-u-1 pure-u-md-1-2 options-section">
      <form class="pure-form pure-form-aligned" method="POST" action="index.php">
        <fieldset>

          <div class="pure-u-1">
            <label for="min-words">Number of words</label>
            <select id="min-words" class="pure-input-1-2" data-option="min-words" name="min-words">
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>

          <div class="pure-u-1">
            <label for="add-num" class="pure-checkbox">
              Add a number? <input id="add-num" type="checkbox" name="add-num" data-option="add-num">
            </label>
          </div>

          <div class="pure-u-1">
            <label for="add-char" class="pure-checkbox">
              Add Special characters? <input id="add-char" type="checkbox" name="add-char" data-option="add-char">
            </label>
          </div>

          <input type='submit' value='Pick a winner!'>

        </fieldset>
      </form>
    </div>
    <div class="pure-u-1 pure-u-md-1-2 options-section">
      <form class="pure-form pure-form-aligned">
        <fieldset>
          <div class="pure-control-group">
            <label for="name">Username</label>
            <input id="name" type="text" placeholder="Username">
          </div>

          <div class="pure-control-group">
            <label for="password">Password</label>
            <input id="password" type="password" placeholder="Password">
          </div>

          <div class="pure-control-group">
            <label for="email">Email Address</label>
            <input id="email" type="email" placeholder="Email Address">
          </div>

          <div class="pure-control-group">
            <label for="foo">Supercalifragilistic Label</label>
            <input id="foo" type="text" placeholder="Enter something here...">
          </div>

          <div class="pure-controls">
            <label for="cb" class="pure-checkbox">
              <input id="cb" type="checkbox"> I've read the terms and conditions
            </label>
          </div>
        </fieldset>
      </form>
    </div>

    <div class="pure-u-1 submit-section">
      <h1 class="content-head">Submit</h1>
      <p>
        <?php
        // print_r(do_stuff());
        // echo do_stuff();
        // print_r($_POST);
        print_r(unpack_post());
        // print_r(get_words_list());
        ?>
      </p>
    </div>

  <!-- End wrapper -->
  </div>

  <div class="pure-g is-center">
    <footer class="pure-u-1">
      <h1>Footer</h1>
    </footer>
  </div>


  <!-- Import JS May add JS features in the future -->
  <!-- <script src="js/vendor/jquery-1.11.3.min.js"></script>
  <script src="js/main.js"></script> -->
</body>
</html>
