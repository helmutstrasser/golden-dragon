<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$cType = ExtensionUtility::registerPlugin(
    'FortuneCookie',
    'Show',
    'Fortune Cookie',
    'content-quote',
    'default',
    'Show fortune cookie message'
);

$GLOBALS['TCA']['tt_content']['types'][$cType]['columnsOverrides']['pages'] = [
    'config' => [
        'minitems' => 1,
        'maxitems' => 1,
    ],
];

$GLOBALS['TCA']['tt_content']['types'][$cType]['showitem'] = '
    --palette--;;general,
    --palette--;;headers,pages,
    --div--;core.form.tabs:appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;core.form.tabs:categories,
        categories,
    --div--;core.form.tabs:language,
        --palette--;;language,
    --div--;core.form.tabs:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;core.form.tabs:notes,
        rowDescription,
    --div--;core.form.tabs:extended';
