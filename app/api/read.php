<?php

require_once '../controllers/ReviewsController.php';
require_once '../helpers/displayMessage.php';

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Requested-With");

$reviews = new ReviewsController();
echo displayResponse($reviews->index(), '200', 'Ok');