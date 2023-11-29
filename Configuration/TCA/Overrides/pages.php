<?php

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        't3easy_tile',
        'Configuration/PageTs/ContentElement/Tile.tsconfig',
        'Tile content element'
    );
});
