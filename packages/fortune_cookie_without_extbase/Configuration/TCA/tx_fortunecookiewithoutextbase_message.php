<?php

declare(strict_types=1);

return[
    'ctrl' => [
        'title' => 'Fortune Cookie Message',
        'label' => 'message',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'origUid' => 't3_origuid',
        'typeicon_classes' => [
            'default' => 'content-quote',
        ],
    ], 
    'columns' => [
        'message' => [
            'label' => 'Message',
            'config' => [
                'type' => 'text',
                'rows' => 10,
                'cols' => 40,
                'required' => true,
            ],
        ],
    ],  
    'types' => [
        '0' => [
            'showitem' => '
                message,
                --div--;core.form.tabs:access,
                    --palette--;;access,
                --div--;core.form.tabs:language,
                    --palette--;;language',
        ],
    ],
    'palettes' => [
        'language' => [
            'showitem' => 'sys_language_uid, l10n_parent',
        ],
        'access' => [
            'label' => 'core.form.palettes:access',
            'showitem' => 'hidden, --linebreak--, starttime, endtime',
        ],
    ],
];