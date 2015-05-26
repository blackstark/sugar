<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $mod_strings;
$module_menu = Array(
    Array("index.php?module=real_reality&action=my", $mod_strings['LNK_REALITY_MY'],"CreateCalls2"),
    Array("index.php?module=real_reality&action=my2", $mod_strings['LNK_REALITY_MY'],"Roles"),
    Array("index.php?module=real_reality&action=ajaxtest", "ajaxtest","Roles"),
    Array("index.php?module=real_reality&action=tpl", "tpl","Tpl"),
);
/*
if(ACLController::checkAccess('real_Reality', 'my', true)) {
    $module_menu[] = array(
        'index.php?module=real_reality&action=my',
        $mod_strings['LNK_REALITY_MY'],
        'CreateCalls2'
    );
}

if(ACLController::checkAccess('real_Reality', 'my2', true)) {
    $module_menu[] = array(
        'index.php?module=real_reality&action=my2',
        $mod_strings['LNK_REALITY_MY'],
        'CreateCalls2'
    );
}
*/
