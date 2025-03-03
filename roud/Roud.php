<?php

use vendor\global\Roud;


Roud::get('/', 'MainController/index');
Roud::get('/main/index', 'MainController/index');
Roud::get('/main/vocabulary', 'MainController/vocabulary');
Roud::get('/main/discussion', 'MainController/discussion');
Roud::get('/main/documentation', 'MainController/documentation');
Roud::get('/main/global', 'MainController/global');
Roud::get('/main/map', 'MainController/map');
Roud::get('/main/materials', 'MainController/materials');
Roud::get('/main/photo', 'MainController/photo');
Roud::get('/main/tools', 'MainController/tools');
Roud::get('/main/video', 'MainController/video');



Roud::get('/log/signup', 'LogController/signup');
Roud::get('/log/login', 'LogController/login');


Roud::get('/comp/header', 'CompController/header');
Roud::get('/comp/footer', 'CompController/footer');




Roud::get('/main/createTable', 'MainController/createTable');
Roud::get('/main/createUser', 'MainController/createUser');