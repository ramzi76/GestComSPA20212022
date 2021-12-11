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
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:203)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:234)'
                        .'|c(?'
                            .'|ont(?'
                                .'|exts/(.+)(?:\\.([^/]++))?(*:276)'
                                .'|acts(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:309)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:347)'
                                    .')'
                                .')'
                            .')'
                            .'|ategories(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:388)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:426)'
                                .')'
                            .')'
                            .'|lients(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:463)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:501)'
                                .')'
                            .')'
                        .')'
                        .'|a(?'
                            .'|dresses(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:544)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:582)'
                                .')'
                            .')'
                            .'|rticles(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:620)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:658)'
                                .')'
                            .')'
                        .')'
                        .'|exercices(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:699)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:737)'
                            .')'
                        .')'
                        .'|f(?'
                            .'|acture_(?'
                                .'|achats(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:788)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:826)'
                                    .')'
                                .')'
                                .'|ventes(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:863)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:901)'
                                    .')'
                                .')'
                            .')'
                            .'|ournisseurs(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:944)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:982)'
                                .')'
                            .')'
                        .')'
                        .'|images(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:1020)'
                            .')'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:1059)'
                            .')'
                        .')'
                        .'|ligne_(?'
                            .'|achats(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1106)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1145)'
                                .')'
                            .')'
                            .'|ventes(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1183)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1222)'
                                .')'
                            .')'
                        .')'
                        .'|promotion(?'
                            .'|s(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:1268)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:1307)'
                                .')'
                            .')'
                            .'|_(?'
                                .'|articles(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1351)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1390)'
                                    .')'
                                .')'
                                .'|categories(?'
                                    .'|(?:\\.([^/]++))?(?'
                                        .'|(*:1432)'
                                    .')'
                                    .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                        .'|(*:1471)'
                                    .')'
                                .')'
                            .')'
                        .')'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        203 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        234 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        276 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        309 => [
            [['_route' => 'api_contacts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_contacts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        347 => [
            [['_route' => 'api_contacts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idContact', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_contacts_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idContact', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_contacts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idContact', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_contacts_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Contact', '_api_identifiers' => ['idContact'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idContact', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        388 => [
            [['_route' => 'api_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        426 => [
            [['_route' => 'api_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idCategorie', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idCategorie', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idCategorie', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_categories_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Categorie', '_api_identifiers' => ['idCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idCategorie', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        463 => [
            [['_route' => 'api_clients_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        501 => [
            [['_route' => 'api_clients_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idClient', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_clients_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idClient', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_clients_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idClient', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_clients_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Client', '_api_identifiers' => ['idClient'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idClient', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        544 => [
            [['_route' => 'api_adresses_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_adresses_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        582 => [
            [['_route' => 'api_adresses_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idAdresse', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_adresses_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idAdresse', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_adresses_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idAdresse', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_adresses_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Adresse', '_api_identifiers' => ['idAdresse'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idAdresse', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        620 => [
            [['_route' => 'api_articles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_articles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        658 => [
            [['_route' => 'api_articles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idArticle', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_articles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idArticle', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_articles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idArticle', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_articles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Article', '_api_identifiers' => ['idArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idArticle', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        699 => [
            [['_route' => 'api_exercices_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exercices_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        737 => [
            [['_route' => 'api_exercices_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idExercice', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_exercices_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idExercice', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_exercices_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idExercice', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_exercices_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Exercice', '_api_identifiers' => ['idExercice'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idExercice', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        788 => [
            [['_route' => 'api_facture_achats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_facture_achats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        826 => [
            [['_route' => 'api_facture_achats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idFactureAchat', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_facture_achats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idFactureAchat', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_facture_achats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idFactureAchat', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_facture_achats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureAchat', '_api_identifiers' => ['idFactureAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idFactureAchat', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        863 => [
            [['_route' => 'api_facture_ventes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_facture_ventes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        901 => [
            [['_route' => 'api_facture_ventes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idFactureVente', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_facture_ventes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idFactureVente', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_facture_ventes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idFactureVente', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_facture_ventes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\FactureVente', '_api_identifiers' => ['idFactureVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idFactureVente', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        944 => [
            [['_route' => 'api_fournisseurs_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fournisseurs_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        982 => [
            [['_route' => 'api_fournisseurs_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idFournisseur', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_fournisseurs_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idFournisseur', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_fournisseurs_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idFournisseur', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_fournisseurs_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Fournisseur', '_api_identifiers' => ['idFournisseur'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idFournisseur', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1020 => [
            [['_route' => 'api_images_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1059 => [
            [['_route' => 'api_images_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idImage', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idImage', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_images_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idImage', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_images_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_identifiers' => ['idImage'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idImage', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1106 => [
            [['_route' => 'api_ligne_achats_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ligne_achats_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1145 => [
            [['_route' => 'api_ligne_achats_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idLigneAchat', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ligne_achats_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idLigneAchat', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ligne_achats_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idLigneAchat', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ligne_achats_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneAchat', '_api_identifiers' => ['idLigneAchat'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idLigneAchat', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1183 => [
            [['_route' => 'api_ligne_ventes_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ligne_ventes_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1222 => [
            [['_route' => 'api_ligne_ventes_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idLigneVente', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_ligne_ventes_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idLigneVente', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_ligne_ventes_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idLigneVente', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_ligne_ventes_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\LigneVente', '_api_identifiers' => ['idLigneVente'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idLigneVente', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1268 => [
            [['_route' => 'api_promotions_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotions_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1307 => [
            [['_route' => 'api_promotions_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idPromotion', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotions_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idPromotion', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promotions_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idPromotion', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promotions_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\Promotion', '_api_identifiers' => ['idPromotion'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idPromotion', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1351 => [
            [['_route' => 'api_promotion_articles_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotion_articles_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1390 => [
            [['_route' => 'api_promotion_articles_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idPromotionArticle', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotion_articles_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idPromotionArticle', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promotion_articles_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idPromotionArticle', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promotion_articles_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionArticle', '_api_identifiers' => ['idPromotionArticle'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idPromotionArticle', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        1432 => [
            [['_route' => 'api_promotion_categories_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotion_categories_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        1471 => [
            [['_route' => 'api_promotion_categories_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'get'], ['idPromotionCategorie', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_promotion_categories_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'delete'], ['idPromotionCategorie', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_promotion_categories_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'put'], ['idPromotionCategorie', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_promotion_categories_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_stateless' => null, '_api_resource_class' => 'App\\Entity\\PromotionCategorie', '_api_identifiers' => ['idPromotionCategorie'], '_api_has_composite_identifier' => false, '_api_item_operation_name' => 'patch'], ['idPromotionCategorie', '_format'], ['PATCH' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
