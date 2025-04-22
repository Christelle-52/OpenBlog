<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin/categories' => [[['_route' => 'app_admin_categories_index', '_controller' => 'App\\Controller\\Admin\\CategoriesController::index'], null, null, null, true, false, null]],
        '/admin/categories/ajouter' => [[['_route' => 'app_admin_categories_add', '_controller' => 'App\\Controller\\Admin\\CategoriesController::addCategory'], null, null, null, false, false, null]],
        '/admin/keywords' => [[['_route' => 'app_admin_keywords_index', '_controller' => 'App\\Controller\\Admin\\KeywordsController::index'], null, null, null, true, false, null]],
        '/admin/keywords/ajouter' => [[['_route' => 'app_admin_keywords_add', '_controller' => 'App\\Controller\\Admin\\KeywordsController::addKeyword'], null, null, null, false, false, null]],
        '/api/file/upload' => [[['_route' => 'api_file_upload', '_format=json', '_controller' => 'App\\Controller\\Api\\FileUploadController::fileUpload'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'app_main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/mentions-legales' => [[['_route' => 'app_mentions', '_controller' => 'App\\Controller\\MainController::mentions'], null, null, null, false, false, null]],
        '/profil/articles' => [[['_route' => 'app_profile_posts_index', '_controller' => 'App\\Controller\\Profile\\PostsController::index'], null, null, null, true, false, null]],
        '/profil/articles/ajouter' => [[['_route' => 'app_profile_posts_add', '_controller' => 'App\\Controller\\Profile\\PostsController::addArticle'], null, null, null, false, false, null]],
        '/profil' => [[['_route' => 'app_profile_index', '_controller' => 'App\\Controller\\Profile\\ProfileController::index'], null, null, null, true, false, null]],
        '/articles' => [[['_route' => 'app_posts_index', '_controller' => 'App\\Controller\\PostsController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'forgotten_password', '_controller' => 'App\\Controller\\SecurityController::forgottenPassword'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/change\\-locale/([^/]++)(*:226)'
                .'|/profil/articles/modifier/([^/]++)(*:268)'
                .'|/articles/details/([^/]++)(*:302)'
                .'|/verif/([^/]++)(*:325)'
                .'|/mot\\-de\\-passe\\-oublie/([^/]++)(*:365)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        226 => [[['_route' => 'change_locale', '_controller' => 'App\\Controller\\MainController::changeLocale'], ['locale'], null, null, false, true, null]],
        268 => [[['_route' => 'app_profile_posts_edit', '_controller' => 'App\\Controller\\Profile\\PostsController::editArticle'], ['id'], null, null, false, true, null]],
        302 => [[['_route' => 'app_posts_details', '_controller' => 'App\\Controller\\PostsController::details'], ['slug'], null, null, false, true, null]],
        325 => [[['_route' => 'verify_user', '_controller' => 'App\\Controller\\RegistrationController::verifUser'], ['token'], null, null, false, true, null]],
        365 => [
            [['_route' => 'reset_password', '_controller' => 'App\\Controller\\SecurityController::resetPassword'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
