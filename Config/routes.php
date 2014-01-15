<?php

Router::connect('/login', array('plugin' => 'MicroAuth', 'controller' => 'MicroAuth', 'action' => 'login'));
Router::connect('/logout', array('plugin' => 'MicroAuth', 'controller' => 'MicroAuth', 'action' => 'logout'));