<?php

use vendor\global\Roud;

Roud::get('/', 'MainController/home');
Roud::get('/main/index', 'MainController/index');
Roud::get('/main/vocabulary', 'MainController/vocabulary');
Roud::get('/main/home', 'MainController/home');
Roud::get('/main/quiz', 'MainController/quiz');
Roud::get('/main/quiztools', 'MainController/quiztools');
Roud::get('/main/tools', 'MainController/tools');

Roud::get('/log/getuser', 'LogController/getuser');
Roud::get('/log/signup', 'LogController/signup');
Roud::get('/log/login', 'LogController/login');
Roud::get('/log/logout', 'LogController/logout');
Roud::get('/log/update', 'LogController/update');
Roud::get('/log/img', 'LogController/img');

Roud::get('/comp/header', 'CompController/header');
Roud::get('/comp/footer', 'CompController/footer');
Roud::get('/comp/footernaw', 'CompController/footernaw');

Roud::get('/listining/index', 'ListiningController/index');
Roud::get('/reading/index', 'ReadingController/index');
Roud::get('/speaking/index', 'SpeakingController/index');
Roud::get('/writing/index', 'WritingController/index');

Roud::get('/grammar/index', 'GrammarController/index');
Roud::get('/grammar/tenses', 'GrammarController/tenses');
Roud::get('/grammar/modal', 'GrammarController/modal');
Roud::get('/grammar/conditional', 'GrammarController/conditional');
Roud::get('/grammar/gerundinfinitiv', 'GrammarController/gerundinfinitiv');

Roud::get('/admin/index', 'AdminController/index');
Roud::get('/admin/login', 'AdminController/login');
Roud::get('/admin/logout', 'AdminController/logout');
