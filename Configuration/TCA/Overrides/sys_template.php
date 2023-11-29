<?php

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        't3easy_tile',
        'Configuration/TypoScript/Standalone/',
        'Standalone'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        't3easy_tile',
        'Configuration/TypoScript/WithFluidStyledContent/',
        'Together with Fluid Content Elements'
    );
});