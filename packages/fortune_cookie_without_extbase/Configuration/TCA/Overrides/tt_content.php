<?php

declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addRecordType(
    [
        'label' => 'fortune_cookie_without_extbase.db:content.show.title',
        'description' => 'fortune_cookie_without_extbase.db:content.show.description',
        'value' => 'fortunecookiewithoutextbase_show',
        'icon' => 'content-quote',
        'group' => 'plugins',
    ],
    '--palette--;;headers,pages,'
        . '--div--;core.form.tabs:appearance,--palette--;;frames',
    [
        'columnsOverrides' => [
            'pages' => [
                'label' => 'Fortune Cookie Messages',
                'config' => [
                    'type' => 'group',
                    'allowed' => 'pages',
                    'size' => 1,
                    'maxitems' => 1,
                    'minitems' => 1,
                    'default' => 0,
                ],
            ],
        ],
    ],
);
