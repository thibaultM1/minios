<?php

$routes = [
    'index'       => [
        'url'        => '/index',
        'controller' => 'HomeController',
        'action'     => 'indexAction',
    ],
    'wiki'        => [
        'url'        => '/wiki',
        'controller' => 'HomeController',
        'action'     => 'wikiAction',
    ],
    'articles'         => [
        'url'        => '/articles',
        'controller' => 'HomeController',
        'action'     => 'articlesAction',
    ],
    'test'      => [
        'url'        => '/test',
        'controller' => 'HomeController',
        'action'     => 'testAction',
    ],
    'contact'      => [
        'url'        => '/contact',
        'controller' => 'HomeController',
        'action'     => 'contactAction',
    ],
    'traitement_formulaire'      => [
        'url'        => '/traitement_formulaire',
        'controller' => 'HomeController',
        'action'     => 'traitFormAction',
    ],
    'traitement_register'      => [
        'url'        => '/traitement_register',
        'controller' => 'HomeController',
        'action'     => 'traitRegisterAction',
    ],
    'produit'      => [
        'url'        => '/produit',
        'controller' => 'HomeController',
        'action'     => 'produitAction',
    ],
    'formulaire'      => [
        'url'        => '/formulaire',
        'controller' => 'HomeController',
        'action'     => 'formulaireAction',
    ],
    'register'      => [
        'url'        => '/register',
        'controller' => 'HomeController',
        'action'     => 'registerAction',
    ],
    'delete'      => [
        'url'        => '/delete',
        'controller' => 'HomeController',
        'action'     => 'deleteAction',
    ],
    '404'         => [
        'url'        => '/404',
        'controller' => 'SecurityController',
        'action'     => '404Action',
    ],
];