<?php
chdir(dirname(__FILE__));
require_once '{$dir_app}/Example_Controller.php';

ini_set('max_execution_time', 0);

Example_Controller::main_CLI('Example_Controller', '{$action_name}');
