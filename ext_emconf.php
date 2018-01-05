<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Lightbox Gallery',
    'description' => 'Typo3 Plugin to create Imagegallery with lightboxes',
    'category' => 'plugin',
    'shy' => 0,
    'version' => '1.0.0',
    'module' => '',
    'state' => 'beta',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'lockType' => '',
    'author' => 'André Flemming',
    'author_email' => 'daslampe@lano-crew.org',
    'author_company' => '',
    'constraints' => [
            'depends' => [
                    'php' => '5.6.0-7.9999.0',
                    'typo3' => '7.6.0 - 8.0.0',
                    'af_responsive_images' => '1.0.0',
            ],
            'conflicts' => [],
            'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => [
            'DasLampe\\AfLightbox\\' => 'Classes/',
        ],
    ],
];
?>