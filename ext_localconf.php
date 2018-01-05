<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'DasLampe.' . $_EXTKEY,
    'Gallery',
    array(
        'Frontend' => 'render',
    ),
    // non-cacheable actions
    array(
        'Frontend' => 'render',
    )
);