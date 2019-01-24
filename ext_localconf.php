<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function () {

        $contactFormPlugin = \FreshP\ExtensionContactForm\Statics\ExtensionStatics::CONTACT_PLUGIN_NAME;
        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'MoveElevator.ExtensionContactForm',
            $contactFormPlugin,
            [
                $contactFormPlugin => 'showStep1,processStep1,summary'
            ],
            // non-cacheable actions
            [
                $contactFormPlugin => 'showStep1,processStep1,summary'
            ]
        );
    }
);
