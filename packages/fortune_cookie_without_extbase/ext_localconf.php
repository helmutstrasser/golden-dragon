<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Loaded with the content rendering, like the TypoScript configurePlugin() adds for an Extbase plugin
ExtensionManagementUtility::addTypoScript(
    'fortune_cookie_without_extbase',
    'setup',
    "@import 'EXT:fortune_cookie_without_extbase/Configuration/TypoScript/setup.typoscript'",
    'defaultContentRendering',
);
