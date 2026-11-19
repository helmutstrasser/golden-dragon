<?php

declare(strict_types=1);

defined('TYPO3') || die('Access denied.');

use GoldenDragon\FortuneCookie\Controller\FortuneController;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

ExtensionUtility::configurePlugin(
    'FortuneCookie',
    'Show',
    [FortuneController::class => 'show'],
    [FortuneController::class => 'show'],
);