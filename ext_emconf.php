<?php

########################################################################
# Extension Manager/Repository config file for ext "powermail_jquery".
#
# Auto generated 01-02-2011 15:58
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Powermail jQuery',
	'description' => 'Automatically adds support for jQuery when using powermail 1.5.6 and above. 

This extension basically uses the following patch by Artem Matevosyan:
http://forge.typo3.org/attachments/3699/powermail_jquery_4762.patch

Credit goes to Artem Matevosyan for providing a patch that works perfect.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.5.5',
	'dependencies' => 'powermail',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'mod1',
	'state' => 'stable',
	'uploadfolder' => 0,
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Typo3 Development Team',
	'author_email' => '',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'powermail' => '1.5.6-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:33:{s:9:"ChangeLog";s:4:"b52d";s:27:"class.ux_powermail_form.php";s:4:"7c66";s:12:"ext_icon.gif";s:4:"4fcc";s:17:"ext_localconf.php";s:4:"7c70";s:28:"ext_typoscript_constants.txt";s:4:"80a4";s:24:"ext_typoscript_setup.txt";s:4:"665a";s:13:"locallang.xml";s:4:"cd2b";s:23:"js/jquery/jquery.min.js";s:4:"65b3";s:25:"js/jquery/tx_powermail.js";s:4:"44ba";s:29:"js/mandatoryjs/fabtabulous.js";s:4:"b727";s:28:"js/mandatoryjs/validation.js";s:4:"0273";s:31:"js/mandatoryjs/lib/prototype.js";s:4:"f424";s:29:"js/mandatoryjs/src/builder.js";s:4:"c688";s:30:"js/mandatoryjs/src/controls.js";s:4:"305b";s:30:"js/mandatoryjs/src/dragdrop.js";s:4:"969c";s:29:"js/mandatoryjs/src/effects.js";s:4:"3b4e";s:35:"js/mandatoryjs/src/scriptaculous.js";s:4:"75d1";s:28:"js/mandatoryjs/src/slider.js";s:4:"83a1";s:27:"js/mandatoryjs/src/sound.js";s:4:"d29c";s:30:"js/mandatoryjs/src/unittest.js";s:4:"a148";s:15:"js/misc/misc.js";s:4:"7d42";s:36:"js/mootools/mootools-1.2.1-packed.js";s:4:"0005";s:23:"js/mootools/mootools.js";s:4:"cad2";s:34:"js/mootools/tx_powermail-packed.js";s:4:"300c";s:27:"js/mootools/tx_powermail.js";s:4:"20a7";s:23:"templates/tmpl_all.html";s:4:"d1e2";s:32:"templates/tmpl_confirmation.html";s:4:"1bf1";s:26:"templates/tmpl_emails.html";s:4:"b3cb";s:29:"templates/tmpl_fieldwrap.html";s:4:"5c66";s:28:"templates/tmpl_formwrap.html";s:4:"81e8";s:29:"templates/tmpl_mandatory.html";s:4:"0696";s:30:"templates/tmpl_multiplejs.html";s:4:"f624";s:23:"templates/tmpl_thx.html";s:4:"d07f";}',
	'suggests' => array(
	),
);

?>