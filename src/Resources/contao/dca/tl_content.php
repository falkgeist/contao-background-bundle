<?php

/*
 * This file is part of Contao Background Bundle.
 *
 * (c) Falk von Freigeist 2021
 * @license LGPL-3.0+
 * @link https://github.com/falkgeist/contao-background-bundle
 */

$GLOBALS['TL_DCA']['tl_content']['palettes']['background'] = '{type_legend},type;{background_legend),bgType;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'bgType';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addParallax';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['bgType_bg_color'] = 'bgColor';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['bgType_bg_image'] = 'singleSRC, addParallax';

$GLOBALS['TL_DCA']['tl_content']['fields']['bgType'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['bgType'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['bg_image', 'bg_color'],
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['bgTypeOptions'],
    'eval'      => ['includeBlankOption' => true, 'submitOnChange' => true, 'tl_class' => 'w50 wizard'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['bgColor'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['bgColor'],
    'exclude'   => true,
    'inputType' => 'text',
    'eval'      => ['maxlength' => 6, 'colorpicker' => true, 'isHexColor' => true, 'decodeEntities' => true, 'tl_class' => 'w50 wizard'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['addParallax'] = array(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addParallax'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('tl_class' => 'w50 wizard'),
    'sql'       => "char(1) NOT NULL default ''",
);