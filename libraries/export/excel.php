<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Set of functions used to build CSV dumps of tables
 *
 * @version $Id: excel.php 12158 2008-12-25 14:52:28Z lem9 $
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 *
 */
if (isset($plugin_list)) {
    $plugin_list['excel'] = array(
        'text' => 'strStrucExcelCSV',
        'extension' => 'csv',
        'mime_type' => 'text/comma-separated-values',
        'options' => array(
            array('type' => 'text', 'name' => 'null', 'text' => 'strReplaceNULLBy'),
            array('type' => 'bool', 'name' => 'columns', 'text' => 'strPutColNames'),
            array(
                'type' => 'select', 
                'name' => 'edition', 
                'values' => array(
                    'win' => 'Windows',
                    'mac_excel2003' => 'Excel 2003 / Macintosh', 
                    'mac_excel2008' => 'Excel 2008 / Macintosh'), 
                'text' => 'strExcelEdition'),
            array('type' => 'hidden', 'name' => 'data'),
            ),
        'options_text' => 'strOptions',
        );
} else {
    /* Everything rest is coded in csv plugin */
    require './libraries/export/csv.php';
}
?>
