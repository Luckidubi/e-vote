<?php
require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Models.php';
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

$vote = $_REQUEST['vote'];

$control = new CandidatesModel;


	$control->add($vote);
	header('Location: '.ROOT_URL. '/candidates')
	echo "Successfully Voted for Candidate"



