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
        '/HTML/result' => [[['_route' => 'HTMLQuiz', '_controller' => 'App\\Controller\\CourseController::indexHTMLQuiz'], null, null, null, false, false, null]],
        '/CSS/result' => [[['_route' => 'CSSQuiz', '_controller' => 'App\\Controller\\CourseController::indexCSSQuiz'], null, null, null, false, false, null]],
        '/JS/result' => [[['_route' => 'JSQuiz', '_controller' => 'App\\Controller\\CourseController::indexJSQuiz'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/registration' => [[['_route' => 'registration', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'Login', '_controller' => 'App\\Controller\\LoginController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\LoginController::logout'], null, null, null, false, false, null]],
        '/EditProfile' => [[['_route' => 'Edit_Profile', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Profile' => [[['_route' => 'Profile', '_controller' => 'App\\Controller\\UserController::indexProfile'], null, null, null, false, false, null]],
        '/home/C/P' => [[['_route' => 'Discover', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_P'], null, null, null, false, false, null]],
        '/home/C/L' => [[['_route' => 'Discover_Courses_Languages', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_L'], null, null, null, false, false, null]],
        '/home/C/M' => [[['_route' => 'Discover_Courses_Music', '_controller' => 'App\\Controller\\UserController::indexDiscover_C_M'], null, null, null, false, false, null]],
        '/home/P/LP' => [[['_route' => 'Discover_LP', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_LP'], null, null, null, false, false, null]],
        '/home/P/L' => [[['_route' => 'Discover_Projects_Languages', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_L'], null, null, null, false, false, null]],
        '/home/P/M' => [[['_route' => 'Discover_Projects_Music', '_controller' => 'App\\Controller\\UserController::indexDiscover_P_M'], null, null, null, false, false, null]],
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
                .'|/CSS(?:/(\\d+))?(*:208)'
                .'|/JS(?:/(\\d+))?(*:230)'
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
        208 => [[['_route' => 'CSSCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexCSS'], ['num'], null, null, false, true, null]],
        230 => [
            [['_route' => 'JSCourse', 'num' => '0', '_controller' => 'App\\Controller\\CourseController::indexJS'], ['num'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];