<?php

use classicframework\core\Router;

Router::connect('/', array(
  'controller' => 'Pages',
  'action' => 'index'
));