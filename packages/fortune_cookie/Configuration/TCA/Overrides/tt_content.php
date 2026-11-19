<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$cType = ExtensionUtility::registerPlugin(
    'FortuneCookie',
    'Show',
    'Fortune Cookie',
    'content-quote',
    'default',
    'Show fortune cookie message'
);

ExtensionManagementUtility::addToAllTCAtypes('tt_content', 'pages', $cType, 'after:palette:headers');

$GLOBALS['TCA']['tt_content']['types'][$cType]['columnsOverrides']['pages']['config'] = [
    'minitems' => 1,
    'maxitems' => 1,
];