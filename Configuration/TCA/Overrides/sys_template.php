<?php
defined('TYPO3_MODE') || die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'headless_gridelements',
    'Configuration/TypoScript',
    'Grid Elements json output for EXT:headless'
);