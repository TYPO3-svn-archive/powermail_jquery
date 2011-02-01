<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

   $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/powermail/pi1/class.tx_powermail_form.php'] = t3lib_extMgm::extPath('powermail_jquery').'class.ux_powermail_form_xclass.php';


?>