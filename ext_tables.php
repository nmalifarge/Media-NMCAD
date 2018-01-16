<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'NMCAD.MediaNmcad',
            'Pi1',
            'Liste_de_medias(NMCAD)'
        );

        $pluginSignature = str_replace('_', '', 'media_nmcad') . '_pi1';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_nmcad/Configuration/FlexForms/flexform_pi1.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'NMCAD.MediaNmcad',
            'Pi2',
            'Liste_d\&#039;auteurs(NMCAD)'
        );

        $pluginSignature = str_replace('_', '', 'media_nmcad') . '_pi2';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_nmcad/Configuration/FlexForms/flexform_pi2.xml');

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
            'NMCAD.MediaNmcad',
            'Pi3',
            'recommandations(NMCAD)'
        );

        $pluginSignature = str_replace('_', '', 'media_nmcad') . '_pi3';
        $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:media_nmcad/Configuration/FlexForms/flexform_pi3.xml');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('media_nmcad', 'Configuration/TypoScript', 'Media_NMCAD');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_media', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_media.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_media');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_review', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_review.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_review');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_author', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_author.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_author');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_social', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_social.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_social');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_type', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_type.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_type');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_medianmcad_domain_model_category', 'EXT:media_nmcad/Resources/Private/Language/locallang_csh_tx_medianmcad_domain_model_category.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_medianmcad_domain_model_category');

    }
);
