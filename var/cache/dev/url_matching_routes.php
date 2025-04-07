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
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/formation' => [[['_route' => 'app_formation', '_controller' => 'App\\Controller\\FormationController::index'], null, null, null, false, false, null]],
        '/afficheLesFormations' => [[['_route' => 'app_aff_formation', '_controller' => 'App\\Controller\\FormationController::afficheLesFormationsAction'], null, null, null, false, false, null]],
        '/afficheLesFormationsEmp' => [[['_route' => 'app_aff_formationemp', '_controller' => 'App\\Controller\\FormationController::afficheLesFormationsEmpAction'], null, null, null, false, false, null]],
        '/ajoutFormation' => [[['_route' => 'app_ajout_formation', '_controller' => 'App\\Controller\\FormationController::ajoutFormationAction'], null, null, null, false, false, null]],
        '/ajoutProduit' => [[['_route' => 'app_ajout_produit', '_controller' => 'App\\Controller\\FormationController::ajoutproduitAction'], null, null, null, false, false, null]],
        '/afficheLesvalidations' => [[['_route' => 'app_aff_validations', '_controller' => 'App\\Controller\\FormationController::afficheLesValidationsAction'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'app_inscription', '_controller' => 'App\\Controller\\InscriptionController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\LoginController::employeConnexion'], null, null, null, false, false, null]],
        '/recherche' => [[['_route' => 'app_recherche', '_controller' => 'App\\Controller\\RechercheController::index'], null, null, null, false, false, null]],
        '/rechercheFindBy' => [[['_route' => 'app_recherche_findBy', '_controller' => 'App\\Controller\\RechercheController::rechercheFindByAction'], null, null, null, false, false, null]],
        '/rechercheinscriptionsdur' => [[['_route' => 'app_recherche_inscriptions', '_controller' => 'App\\Controller\\RechercheController::rechercheInscriptions'], null, null, null, false, false, null]],
        '/rechercheInscription' => [[['_route' => 'app_recherche_x', '_controller' => 'App\\Controller\\RechercheController::rechercheInscription'], null, null, null, false, false, null]],
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
                .'|/DejaInscrit/([^/]++)(*:223)'
                .'|/suppFormation/([^/]++)(*:254)'
                .'|/inscription(?'
                    .'|/([^/]++)(*:286)'
                    .'|_emp/([^/_]++)_([^/]++)(*:317)'
                .')'
                .'|/validerinscription/([^/]++)(*:354)'
                .'|/refuserinscription/([^/]++)(*:390)'
                .'|/afficheLesFormationsvalidations/([^/]++)(*:439)'
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
        223 => [[['_route' => 'app_attention', '_controller' => 'App\\Controller\\FormationController::DejaInscritEmpAction'], ['id'], null, null, false, true, null]],
        254 => [[['_route' => 'app_formation_sup', '_controller' => 'App\\Controller\\FormationController::suppFormationAction'], ['id'], null, null, false, true, null]],
        286 => [[['_route' => 'app_inscription_formation', '_controller' => 'App\\Controller\\FormationController::inscriptionformationAction'], ['id'], null, null, false, true, null]],
        317 => [[['_route' => 'Employe_inscri', '_controller' => 'App\\Controller\\InscriptionController::findOneBySomePrenomNomAction'], ['nom', 'prenom'], null, null, false, true, null]],
        354 => [[['_route' => 'app_validerinscription', '_controller' => 'App\\Controller\\FormationController::ValiderformationAction'], ['id'], null, null, false, true, null]],
        390 => [[['_route' => 'app_refuserinscription', '_controller' => 'App\\Controller\\FormationController::RefuserformationAction'], ['id'], null, null, false, true, null]],
        439 => [
            [['_route' => 'app_aff_valider', '_controller' => 'App\\Controller\\FormationController::afficheLesFormationsValiderAction'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
