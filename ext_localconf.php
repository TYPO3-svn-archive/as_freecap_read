<?php

if (!defined ('TYPO3_MODE'))     die ('Access denied.');
 
$TYPO3_CONF_VARS['FE']['XCLASS']['ext/sr_freecap/pi1/class.tx_srfreecap_pi1.php']= t3lib_extMgm::extPath($_EXTKEY).'pi1/class.ux_tx_srfreecap_pi1.php'; 

?>