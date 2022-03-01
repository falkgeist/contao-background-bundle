<?php

/*
 * This file is part of Contao Background Bundle.
 *
 * (c) Falk von Freigeist 2021
 * @license LGPL-3.0+
 * @link https://github.com/falkgeist/contao-background-bundle
 */

// remove '%' from units, since it is not working
$units = $GLOBALS['TL_CSS_UNITS'];
unset($units[1]);
$units = array_values($units);

$GLOBALS['TL_DCA']['tl_content']['palettes']['background_start'] = '{type_legend},type;{background_legend),bgType,minHeight;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests,cssID,space;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['background_end'] = '{type_legend},type;{template_legend:hide},customTpl;{protected_legend:hide},protected;{expert_legend:hide},guests;{invisible_legend:hide},invisible,start,stop';
$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'bgType';
// TODO: Add parallax
//$GLOBALS['TL_DCA']['tl_content']['palettes']['__selector__'][] = 'addParallax';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['bgType_bg_color'] = 'bgColor';
$GLOBALS['TL_DCA']['tl_content']['subpalettes']['bgType_bg_image'] = 'singleSRC,verticalAlign,horizontalAlign';
// TODO: Add parallax
//$GLOBALS['TL_DCA']['tl_content']['subpalettes']['bgType_bg_image'] = 'singleSRC, addParallax';

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

$GLOBALS['TL_DCA']['tl_content']['fields']['minHeight'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['minHeight'],
    'exclude'   => true,
    'inputType' => 'inputUnit',
    'options'   => $units,
    'eval'      => ['includeBlankOption'=>true, 'rgxp'=>'digit_auto_inherit', 'maxlength' => 20, 'tl_class'=>'clr w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['verticalAlign'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['verticalAlign'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['top', '25%', 'center', '75%', 'bottom'],
    'eval'      => ['includeBlankOption'=>true, 'tl_class'=>'clr w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

$GLOBALS['TL_DCA']['tl_content']['fields']['horizontalAlign'] = [
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['horizontalAlign'],
    'exclude'   => true,
    'inputType' => 'select',
    'options'   => ['left', '25%', 'center', '75%', 'right'],
    'eval'      => ['includeBlankOption'=>true, 'tl_class'=>'w50'],
    'sql'       => "varchar(255) NOT NULL default ''",
];

// TODO: Add parallax
//$GLOBALS['TL_DCA']['tl_content']['fields']['addParallax'] = array(
//    'label'     => &$GLOBALS['TL_LANG']['tl_content']['addParallax'],
//    'exclude'   => true,
//    'inputType' => 'checkbox',
//    'eval'      => array('tl_class' => 'w50 wizard'),
//    'sql'       => "char(1) NOT NULL default ''",
//);