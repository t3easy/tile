<?php

defined('TYPO3') or die();

call_user_func(static function () {
    $typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getMajorVersion();

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
        'tt_content',
        'CType',
        [
            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:CType.t3easy_tile',
            't3easy_tile',
            'content-textmedia',
            'default',
        ],
        'textmedia',
        'after'
    );

    $GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['t3easy_tile'] = 'mimetypes-x-content-text-media';

    $cropVariant = [
        'allowedAspectRatios' => [
            '1:1' => [
                'title' => 'LLL:EXT:core/Resources/Private/Language/locallang_wizards.xlf:imwizard.ratio.1_1',
                'value' => 1.0,
            ],
            '2:1' => [
                'title' => '2:1',
                'value' => 2.0,
            ],
            '1:2' => [
                'title' => '1:2',
                'value' => 0.5,
            ],
        ],
        'selectedRatio' => '1:1',
        'cropArea' => [
            'x' => 0.0,
            'y' => 0.0,
            'width' => 1.0,
            'height' => 1.0,
        ],
    ];

    $GLOBALS['TCA']['tt_content']['types']['t3easy_tile'] = [
        'columnsOverrides' => [
            'assets' => [
                'config' => [
                    'minitems' => 0,
                    'maxitems' => 2,
                    'overrideChildTca' => [
                        'columns' => [
                            'crop' => [
                                'config' => [
                                    'cropVariants' => [
                                        'default' => [
                                            'disabled' => true,
                                        ],
                                        'sm' => $cropVariant + ['title' => 'S'],
                                        'md' => $cropVariant + ['title' => 'M'],
                                        'lg' => $cropVariant + ['title' => 'L'],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'bodytext' => [
                'config' => [
                    'enableRichtext' => true,
                ],
            ],
            't3easy_ce_classes' => [
                'config' => [
                    'items' => $typo3Version < 12 ? [
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'small-3',
                            '',
                            'width-small',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'small-6',
                            '',
                            'width-small',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'small-12',
                            '',
                            'width-small',
                        ],

                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'medium-3',
                            '',
                            'width-medium',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'medium-6',
                            '',
                            'width-medium',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'medium-12',
                            '',
                            'width-medium',
                        ],

                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'large-3',
                            '',
                            'width-large',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'large-6',
                            '',
                            'width-large',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'large-12',
                            '',
                            'width-large',
                        ],

                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'small-height-50',
                            '',
                            'height-small',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'small-height-200',
                            '',
                            'height-small',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'small-height-auto',
                            '',
                            'height-small',
                        ],

                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'medium-height-50',
                            '',
                            'height-medium',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'medium-height-200',
                            '',
                            'height-medium',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'medium-height-auto',
                            '',
                            'height-medium',
                        ],

                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'large-height-50',
                            '',
                            'height-large',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'large-height-200',
                            '',
                            'height-large',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'large-height-auto',
                            '',
                            'height-large',
                        ],
                    ] : [
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'value' => 'small-3',
                            'group' => 'width-small',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'value' => 'small-6',
                            'group' => 'width-small',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'value' => 'small-12',
                            'group' => 'width-small',
                        ],

                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'value' => 'medium-3',
                            'group' => 'width-medium',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'value' => 'medium-6',
                            'group' => 'width-medium',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'value' => 'medium-12',
                            'group' => 'width-medium',
                        ],

                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-3',
                            'value' => 'large-3',
                            'group' => 'width-large',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-6',
                            'value' => 'large-6',
                            'group' => 'width-large',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.width-12',
                            'value' => 'large-12',
                            'group' => 'width-large',
                        ],

                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'value' => 'small-height-50',
                            'group' => 'height-small',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'value' => 'small-height-200',
                            'group' => 'height-small',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'value' => 'small-height-auto',
                            'group' => 'height-small',
                        ],

                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'value' => 'medium-height-50',
                            'group' => 'height-medium',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'value' => 'medium-height-200',
                            'group' => 'height-medium',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'value' => 'medium-height-auto',
                            'group' => 'height-medium',
                        ],

                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-50',
                            'value' => 'large-height-50',
                            'group' => 'height-large',
                        ],
                        [
                            'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-200',
                            'value' => 'large-height-200',
                            'group' => 'height-large',
                        ],
                        [
                            'label' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.height-auto',
                            'value' => 'large-height-auto',
                            'group' => 'height-large',
                        ],
                    ],
                    'itemGroups' => [
                        'width-small' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.width-small',
                        'width-medium' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.width-medium',
                        'width-large' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.width-large',
                        'height-small' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.height-small',
                        'height-medium' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.height-medium',
                        'height-large' => 'LLL:EXT:t3easy_tile/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.height-large',
                    ],
                    'maxitems' => 6,
                    'default' => 'small-3',
                ],
            ],
        ],
        'showitem' => '
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                --palette--;;general,
                --palette--;;headers,
                bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.media,
                assets,
            --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
                --palette--;;t3easy_ce_classes_appearance,
                --palette--;;appearanceLinks,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                --palette--;;language,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
                --palette--;;hidden,
                --palette--;;access,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                categories,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                rowDescription,
            --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
        ',
    ];
});
