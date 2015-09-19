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
</head>
<body>
  <!-- Header -->
  <div class="pure-g is-center">
    <header class="pure-u-1">
      <h1>XKCD Password Generator</h1>
    </header>
  </div>

  <!-- Wrapper -->
  <div class="pure-g wrapper is-center">
    <div class="pure-u-1 results-section">
      <div class="content">
        <!-- Update this to have a new string once the submit button is pressed -->
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
    <div class="pure-u-1 options-section">
      <h1>Options</h1>
    </div>
    <div class="pure-u-1 submit-section">
      <h1>Submit</h1>
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
