<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App;

// Get All movies
$app->get('/api/movies', function(Request $request, Response $response){
  $sql = "SELECT * FROM pollquestions";

  try{
    // Get DB Object
    $db = new db();
    // connect
    $db = $db->connect();

    $stmt = $db->query($sql);
    $customers = $stmt->fetchAll(PDO::FETCH_OBJ);
    $db = null;
    echo json_encode(pollquestions);
  } catch(PDOException $e){
      echo '{"error": {"text": '.$e->getMessage().'}';
  }
});
