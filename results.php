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

    <title>Results</title>

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
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
            <h1 class="cover-heading">Results</h1>
          </div>


          <?php
    $db = mysqli_connect("server.appartmedia.nl", "s161151", "WebTech123", "s161151");

    if (isset($_POST['vote'])) {
        $votenum = $_POST['vote'];

        switch($votenum) {
            case 1: $votechange = "Answer1_Votes"; break;
            case 2: $votechange = "Answer2_Votes"; break;
            case 3: $votechange = "Answer3_Votes"; break;
            default: exit;
        }

        $pollID = mysqli_real_escape_string($db, $_POST['poll']);

        $result = mysqli_query($db, "UPDATE pollquestions SET $votechange = $votechange + 1 WHERE ID =
        $pollID;");

        if ($result) {
            echo "Thanks for voting!<br /><br />";
        }
    }


    $result = mysqli_query($db, "SELECT Answer1, Answer2, Answer3, Answer1_Votes, Answer2_Votes, Answer3_Votes
    FROM pollquestions ORDER BY ID DESC LIMIT 1;");
    extract(mysqli_fetch_assoc($result), EXTR_PREFIX_ALL, 'poll');

    echo "<ul>";
    echo "<li>$poll_Answer1: $poll_Answer1_Votes</li>";
    echo "<li>$poll_Answer2: $poll_Answer2_Votes</li>";
    echo "<li>$poll_Answer3: $poll_Answer3_Votes</li>";
    echo "</ul>";
?>
          <a href="/index.php">Back to home</a>
        </div>

      </div>

    </div>

    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
