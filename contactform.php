<!DOCTYPE html>
<html lang="en">
  <head>
    <!--font roboto + Raleway-->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/x-icon" href="favicon.ico">

    <title>Home</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Web Technology</h3>
                <ul class="nav masthead-nav">
                  <li class="active">Today's date: <script type="text/javascript" src="date.js"></script></li>
                </ul>
            </div>
          </div>
          <div class="movies">
            <a href="http://www.imdb.com/title/tt2488496/">
              <div class="movie"><img src="https://www.movieposter.com/posters/archive/main/226/MPW-113453" alt="Star Wars" height=292 width=195></div>
            </a>
            <a href="http://www.imdb.com/title/tt0120737/">
              <div class="movie"><img src="https://www.movieartarena.com/imgs/lotr1final.jpg" alt="Lord of The Rings" height=292 width=195></div>
            </a>
            <a href="http://www.imdb.com/title/tt0097576/" >
              <div href="http://www.imdb.com/title/tt0097576/" class="movie"><img src="https://fanart.tv/fanart/movies/89/movieposter/indiana-jones-and-the-last-crusade-5226720e50702.jpg" alt="Indiana Jones" height=292 width=195></div>
            </a>
            </div>
          <div class="inner cover">
            <h1 class="cover-heading">What movie should I add?</h1>
          </div>

          <?php
          $action = ( array_key_exists( 'action', $_REQUEST) ? $_REQUEST['action'] : "" );
          if ($action=="")    /* display the contact form */
              {
              ?>
              <form  action="" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="action" value="submit">
              Your name:<br>
              <input name="name" type="text" value="" size="30"/><br>
              Your email:<br>
              <input name="email" type="text" value="" size="30"/><br>
              Name of the film:<br>
              <textarea name="message" rows="7" cols="30"></textarea><br>
              <input type="submit" value="Send email"/>
              </form>
              <?php
              }
          else                /* send the submitted data */
              {
              $name=$_REQUEST['name'];
              $email=$_REQUEST['email'];
              $message=$_REQUEST['message'];
              if (($name=="")||($email=="")||($message==""))
                  {
          		echo "All fields are required, please fill <a href=\"\">the form</a> again.";
          	    }
              else{
          	    $from="From: $name<$email>\r\nReturn-path: $email";
                  $subject="Message sent using your contact form";
          		mail("lucas.peeters3000@gmail.com", $subject, $message, $from);
          		echo "Thank you! I will add the movie as soon as possible.";
          	    }
              }
          ?>
          <div>
             <a href="/cover/index.php">Back to home</a>
              </div>
        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="todo.js"></script>
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
