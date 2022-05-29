<?php
defined('TYPO3') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'ValidationTest',
    'Pi1',
    [
        \Derhansen\ValidationTest\Controller\Pi1Controller::class => 'form',
    ],
    // non-cacheable actions
    [
        \Derhansen\ValidationTest\Controller\Pi1Controller::class => 'form',
    ]
);