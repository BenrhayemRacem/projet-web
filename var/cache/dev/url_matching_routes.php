<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/changePasswd' => [[['_route' => 'ChangePasswd', '_controller' => 'App\\Controller\\ChangepasswController::index'], null, null, null, false, false, null]],
        '/HTML/result' => [[['_route' => 'HTMLQuiz', '_controller' => 'App\\Controller\\CourseController::indexHTMLQuiz'], null, null, null, false, false, null]],
        '/CSS/result' => [[['_route' => 'CSSQuiz', '_controller' => 'App\\Controller\\CourseController::indexCSSQuiz'], null, null, null, false, false, null]],
        '/JS/result' => [[['_route' => 'JSQuiz', '_controller' => 'App\\Controller\\CourseController::indexJSQuiz'], null, null, null, false, false, null]],
        '/francais/result' => [[['_route' => 'francaisQuiz', '_controller' => 'App\\Controller\\CourseController::indexfrancaisQuiz'], null, null, null, false, false, null]],
        '/anglais/result' => [[['_route' => 'anglaisQuiz', '_controller' => 'App\\Controller\\CourseController::indexanglaisQuiz'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/projectViewBase' => [[['_route' => 'ProjectViewBase', '_controller' => 'App\\Controller\\ProjectsController::indexproject'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/Profile' => [[['_route' => 'Profile', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/EditProfile' => [[['_route' => 'Edit_Profile', '_controller' => 'App\\Controller\\UserController::indexEditInfo'], null, null, null, false, false, null]],
        '/EditPasswd' => [[['_route' => 'Edit_Passwd', '_controller' => 'App\\Controller\\UserController::indexEditPasswd'], null, null, null, false, false, null]],
        '/home/C/P' => [[['_route' => 'Discover', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_P'], null, null, null, false, false, null]],
        '/home/C/L' => [[['_route' => 'Discover_Courses_Languages', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_L'], null, null, null, false, false, null]],
        '/home/C/M' => [[['_route' => 'Discover_Courses_Music', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_M'], null, null, null, false, false, null]],
        '/home/P/LP' => [[['_route' => 'Discover_LP', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_LP'], null, null, null, false, false, null]],
        '/home/P/L' => [[['_route' => 'Discover_Projects_Languages', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_L'], null, null, null, false, false, null]],
        '/home/P/M' => [[['_route' => 'Discover_Projects_Music', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_M'], null, null, null, false, false, null]],
        '/MyProjets' => [[['_route' => 'MyProjects', '_controller' => 'App\\Controller\\UserController::indexMyProjects'], null, null, null, false, false, null]],
        '/MyCourses' => [[['_route' => 'MyCourses', '_controller' => 'App\\Controller\\UserController::indexMyCourses'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/HTML(?:/(\\d+))?(*:185)'
                .'|/C(?'
                    .'|SS(?:/(\\d+))?(*:211)'
                    .'|pp(?:/(\\d+))?(*:232)'
                .')'
                .'|/J(?'
                    .'|S(?:/(\\d+))?(*:258)'
                    .'|AVA(?:/(\\d+))?(*:280)'
                .')'
                .'|/SQL(?:/(\\d+))?(*:304)'
                .'|/P(?'
                    .'|ython(?:/(\\d+))?(*:333)'
                    .'|ortugais(?:/(\\d+))?(*:360)'
                .')'
                .'|/francais(?:/(\\d+))?(*:389)'
                .'|/a(?'
                    .'|nglais(?:/(\\d+))?(*:419)'
                    .'|llemand(?:/(\\d+))?(*:445)'
                .')'
                .'|/espagnol(?:/(\\d+))?(*:474)'
                .'|/Italien(?:/(\\d+))?(*:501)'
                .'|/R(?'
                    .'|usse(?:/(\\d+))?(*:529)'
                    .'|emoveMy(?'
                        .'|Project/([^/]++)(*:563)'
                        .'|Course/([^/]++)(*:586)'
                    .')'
                .')'
                .'|/mail/([^/]++)/([^/]++)(?'
                    .'|/([^/]++)(*:631)'
                    .'|(*:639)'
                .')'
                .'|/projectView/(\\d+)/([^/]++)/([^/]++)(*:684)'
                .'|/Addproject/(\\d+)/([^/]++)/([^/]++)(*:727)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'HTMLCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexHTML'], ['num'], null, null, false, true, null]],
        211 => [[['_route' => 'CSSCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexCSS'], ['num'], null, null, false, true, null]],
        232 => [[['_route' => 'C++Course', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexCpp'], ['num'], null, null, false, true, null]],
        258 => [[['_route' => 'JSCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexJS'], ['num'], null, null, false, true, null]],
        280 => [[['_route' => 'JAVACourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexJava'], ['num'], null, null, false, true, null]],
        304 => [[['_route' => 'SQLCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexSQL'], ['num'], null, null, false, true, null]],
        333 => [[['_route' => 'PythonCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexPython'], ['num'], null, null, false, true, null]],
        360 => [[['_route' => 'PortugaisCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexPortugais'], ['num'], null, null, false, true, null]],
        389 => [[['_route' => 'francaisCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexfrancais'], ['num'], null, null, false, true, null]],
        419 => [[['_route' => 'anglaisCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexanglais'], ['num'], null, null, false, true, null]],
        445 => [[['_route' => 'AllemandCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexAllemand'], ['num'], null, null, false, true, null]],
        474 => [[['_route' => 'EspagnolCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexEspagnol'], ['num'], null, null, false, true, null]],
        501 => [[['_route' => 'ItalienCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexItalien'], ['num'], null, null, false, true, null]],
        529 => [[['_route' => 'RusseCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexRusse'], ['num'], null, null, false, true, null]],
        563 => [[['_route' => 'RemoteMyProjects', '_controller' => 'App\\Controller\\UserController::indexRemoveMyProjects'], ['id'], null, null, false, true, null]],
        586 => [[['_route' => 'RemoteMyCourses', '_controller' => 'App\\Controller\\UserController::indexRemoveMyCourses'], ['id'], null, null, false, true, null]],
        631 => [[['_route' => 'mail', '_controller' => 'App\\Controller\\MailController::index'], ['name', 'mail', 'uniqueId'], null, null, false, true, null]],
        639 => [[['_route' => 'mail.verif', '_controller' => 'App\\Controller\\MailController::verificationEmail'], ['mail', 'uniqueId'], null, null, false, true, null]],
        684 => [[['_route' => 'ProjectView', 'num' => '0', '_controller' => 'App\\Controller\\ProjectsController::index'], ['num', 'ProjectName', 'Field'], null, null, false, true, null]],
        727 => [
            [['_route' => 'AddProject', 'num' => '0', '_controller' => 'App\\Controller\\ProjectsController::indexAddProject'], ['num', 'ProjectName', 'Field'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
