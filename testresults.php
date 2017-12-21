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