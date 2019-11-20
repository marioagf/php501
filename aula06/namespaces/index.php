<?php

require_once './controllers/landing.php';
require_once './models/landing.php';

use controllers\landing as LandingControllers;
use models\landing as LandingModels;
use models\Data;

//$landing = new \controllers\Landing;
$landing = new LandingControllers;
$landing->get_landing();

$landing2 = new LandingModels;
$landing2->get_landing();

$data = new Data;
$data->get_data();

