<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'HTMLQuiz' => [[], ['_controller' => 'App\\Controller\\CourseController::indexHTMLQuiz'], [], [['text', '/HTML/result']], [], []],
    'HTMLCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexHTML'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/HTML']], [], []],
    'CSSQuiz' => [[], ['_controller' => 'App\\Controller\\CourseController::indexCSSQuiz'], [], [['text', '/CSS/result']], [], []],
    'CSSCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexCSS'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/CSS']], [], []],
    'JAVASCIPTQuiz' => [[], ['_controller' => 'App\\Controller\\CourseController::indexJSQuiz'], [], [['text', '/JS/result']], [], []],
    'JAVASCIPTCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexJS'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/JS']], [], []],
    'C++Course' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexCpp'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/Cpp']], [], []],
    'SQLCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexSQL'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/SQL']], [], []],
    'JAVACourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexJava'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/JAVA']], [], []],
    'francaisQuiz' => [[], ['_controller' => 'App\\Controller\\CourseController::indexfrancaisQuiz'], [], [['text', '/francais/result']], [], []],
    'francaisCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexfrancais'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/francais']], [], []],
    'anglaisQuiz' => [[], ['_controller' => 'App\\Controller\\CourseController::indexanglaisQuiz'], [], [['text', '/anglais/result']], [], []],
    'anglaisCourse' => [['num'], ['num' => '0', '_controller' => 'App\\Controller\\CourseController::indexanglais'], ['num' => '\\d+'], [['variable', '/', '\\d+', 'num', true], ['text', '/anglais']], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], []],
    'registration' => [[], ['_controller' => 'App\\Controller\\InscriptionController::index'], [], [['text', '/registration']], [], []],
    'Login' => [[], ['_controller' => 'App\\Controller\\LoginController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\LoginController::logout'], [], [['text', '/logout']], [], []],
    'Edit_Profile' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/EditProfile']], [], []],
    'Profile' => [[], ['_controller' => 'App\\Controller\\UserController::indexProfile'], [], [['text', '/Profile']], [], []],
    'Discover' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_C_P'], [], [['text', '/home/C/P']], [], []],
    'Discover_Courses_Languages' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_C_L'], [], [['text', '/home/C/L']], [], []],
    'Discover_Courses_Music' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_C_M'], [], [['text', '/home/C/M']], [], []],
    'Discover_LP' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_P_LP'], [], [['text', '/home/P/LP']], [], []],
    'Discover_Projects_Languages' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_P_L'], [], [['text', '/home/P/L']], [], []],
    'Discover_Projects_Music' => [[], ['_controller' => 'App\\Controller\\UserController::indexDiscover_P_M'], [], [['text', '/home/P/M']], [], []],
    'MyProjects' => [[], ['_controller' => 'App\\Controller\\UserController::indexMyProjects'], [], [['text', '/MyProjets']], [], []],
    'MyCourses' => [[], ['_controller' => 'App\\Controller\\UserController::indexMyCourses'], [], [['text', '/MyCourses']], [], []],
];
