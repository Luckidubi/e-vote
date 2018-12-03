<?php
session_start();
require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Models.php';
require 'classes/Messages.php';

require 'config.php';

require 'controllers/home.php';
require 'controllers/voters.php';
require 'controllers/votes.php';
require 'controllers/candidates.php';
require 'controllers/positions.php';

require 'models/home.php';
require 'models/voters.php';
require 'models/votes.php';
require 'models/candidates.php';
require 'models/positions.php';

$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if($controller){
	$controller->executeAction();
}