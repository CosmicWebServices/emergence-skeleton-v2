<?php

Git::$repositories['emergence-skeleton-v2'] = [
    'remote' => 'https://github.com/JarvusInnovations/emergence-skeleton-v2.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'html-templates',
        'php-classes' => [
            'exclude' => [
                '#^/(Symfony|Gitonomy|Chaki|Jarvus/Sencha)/#' // exclude namespaces pulled from external layers
            ]
        ],
        'php-config',
        'php-migrations',
        'sencha-workspaces/pages/src',
        'site-root' => [
            'exclude' => [
                '#^/sencha-cmd/#', // exclude files pulled by emergence-sencha layer
                '#^/css(/|$)#', // don't sync /css, this directory is generated by /sass/compile
                '#^/js/pages(/|$)#' // don't sync /js/pages, this directory is generated by /sencha-cmd/pages-build
            ]
        ]
    ]
];

Git::$repositories['emergence-sencha'] = [
    'remote' => 'git@github.com:JarvusInnovations/emergence-sencha.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'packages/sencha',
        'php-classes/Jarvus/Sencha',
        'site-root/sencha-cmd'
    ]
];

Git::$repositories['chaki-emergence'] = [
    'remote' => 'git@github.com:JarvusInnovations/chaki-emergence.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'packages/chaki',
        'php-classes/Chaki'
    ]
];

// used by gitlib, in skeleton-v2 because it requires PHP 5.5, but should be moved to skeleton once 5.3 is deprecated
Git::$repositories['symfony-process'] = [
    'remote' => 'https://github.com/symfony/Process.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'php-classes/Symfony/Component/Process' => [
            'path' => '.',
            'exclude' => [
                '#(?<!\.php)$#', // exclude non-php files
                '#^/Tests/#' // exclude tests
            ]
        ]
    ]
];

Git::$repositories['gitlib'] = [
    'remote' => 'https://github.com/gitonomy/gitlib.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        'php-classes/Gitonomy/Git' => 'src/Gitonomy/Git'
    ]
];