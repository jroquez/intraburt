<?php

// Use an autoloader!
require 'config/vars.php';

require 'libs/Database.php';
require 'libs/Sessions.php';

require 'libs/Bootstrap.php';
require 'libs/Controller.php';
require 'libs/Model.php';
require 'libs/View.php';

$app = new Bootstrap();
