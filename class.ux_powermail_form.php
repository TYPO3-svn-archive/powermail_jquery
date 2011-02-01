<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Alex Kellner, Mischa Heißmann <alexander.kellner@einpraegsam.net, typo3.YYYY@heissmann.org>
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/


class ux_powermail_form_xclass extends tx_powermail_form_xclass {	

	// Add Javascript after form output for mandatory check
	function AddMandatoryJS() {

		if($this->conf['libraryToUse'] == 'jquery'){
			$jsValidation = '
				var valid = new Validation(\'#'.$this->OuterMarkerArray['###POWERMAIL_NAME###'].'\', {immediate : true, onFormValidate : formCallback, focusOnError: true});
			';

		}else{
			$jsValidation = '
					var valid = new Validation(\'' . $this->OuterMarkerArray['###POWERMAIL_NAME###'] . '\', {immediate : true, onFormValidate : formCallback});
			';
		}

		$js = '
			<script type="text/javascript">
				function formCallback(result, form) {
					window.status = "valiation callback for form \'" + form.id + "\': result = " + result;
				}
				' . $jsValidation . '
			</script>
		';

		return $js;
	}	

}



if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/powermail_jquery/pi1/class.ux_powermail_form_xclass.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/powermail_jquery/pi1/class.ux_powermail_form_xclass.php']);
}

?>