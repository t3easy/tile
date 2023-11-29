<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Tile content element',
    'description' => 'A customisable tile content element.',
    'category' => 'fe',
    'author' => 'Jan Kiesewetter',
    'author_email' => 'jan@t3easy.de',
    'author_company' => 't3easy',
    'state' => 'alpha',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.4.99',
            'fluid' => '10.4.0-12.4.99',
            'frontend' => '10.4.0-12.4.99',
            't3easy_ce_classes' => '1.1.0 => 1.99.99',
            't3easy_video_attributes' => '1.0.0 => 1.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'fluid_styled_content' => '10.4.0-12.4.99',
        ],
    ],
];
