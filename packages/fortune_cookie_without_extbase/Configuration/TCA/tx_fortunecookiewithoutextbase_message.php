<?php

declare(strict_types=1);

return [
    'ctrl' => [
        'title' => 'fortune_cookie_without_extbase.db:tx_fortunecookiewithoutextbase_message',
        'label' => 'message',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'translationSource' => 'l10n_source',
        'enablecolumns' => [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'typeicon_classes' => [
            'default' => 'content-quote',
        ],
    ],
    'columns' => [
        'message' => [
            'label' => 'fortune_cookie_without_extbase.db:tx_fortunecookiewithoutextbase_message.message',
            'config' => [
                'type' => 'text',
                'rows' => 3,
                'required' => true,
            ],
        ],
    ],
    'types' => [
        '0' => [
            'showitem' => 'message,'
                . '--div--;core.form.tabs:language,sys_language_uid,l10n_parent,'
                . '--div--;core.form.tabs:access,hidden,starttime,endtime',
        ],
    ],
];
