<?php

########################################################################
# Extension Manager/Repository config file for ext "powermail".
#
# Auto generated 22-12-2010 09:37
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
	'dependencies' => '',
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
	'_md5_values_when_last_written' => 'a:180:{s:9:"ChangeLog";s:4:"a202";s:21:"ext_conf_template.txt";s:4:"0f41";s:12:"ext_icon.gif";s:4:"4fcc";s:17:"ext_localconf.php";s:4:"9ad5";s:14:"ext_tables.php";s:4:"3a86";s:14:"ext_tables.sql";s:4:"71b5";s:28:"ext_typoscript_constants.txt";s:4:"d584";s:24:"ext_typoscript_setup.txt";s:4:"f155";s:28:"icon_tx_powermail_fields.gif";s:4:"9a15";s:31:"icon_tx_powermail_fields__h.gif";s:4:"07b3";s:32:"icon_tx_powermail_fields__ht.gif";s:4:"3c06";s:31:"icon_tx_powermail_fields__t.gif";s:4:"976c";s:31:"icon_tx_powermail_fieldsets.gif";s:4:"35ac";s:34:"icon_tx_powermail_fieldsets__h.gif";s:4:"ebeb";s:35:"icon_tx_powermail_fieldsets__ht.gif";s:4:"4f86";s:34:"icon_tx_powermail_fieldsets__t.gif";s:4:"14bb";s:27:"icon_tx_powermail_forms.gif";s:4:"80fe";s:30:"icon_tx_powermail_forms__h.gif";s:4:"b151";s:31:"icon_tx_powermail_forms__ht.gif";s:4:"f7e7";s:30:"icon_tx_powermail_forms__t.gif";s:4:"4893";s:27:"icon_tx_powermail_mails.gif";s:4:"fcba";s:30:"icon_tx_powermail_mails__h.gif";s:4:"2f4b";s:30:"icon_tx_powermail_mails__t.gif";s:4:"2f4b";s:13:"locallang.xml";s:4:"77ea";s:16:"locallang_db.xml";s:4:"1bf4";s:7:"tca.php";s:4:"e3c1";s:12:"cli/conf.php";s:4:"6ef8";s:15:"cli/cronjob.php";s:4:"e60a";s:18:"css/multipleJS.css";s:4:"609e";s:17:"css/sampleCSS.css";s:4:"3706";s:14:"doc/manual.sxw";s:4:"8874";s:31:"doc/database_relation/Thumbs.db";s:4:"482f";s:53:"doc/database_relation/powermail_database_relation.gif";s:4:"20e9";s:19:"doc/hook/hooks.html";s:4:"0b4b";s:18:"doc/hook/hooks.ods";s:4:"3d0b";s:32:"doc/powermail_graphics/Thumbs.db";s:4:"06ab";s:35:"doc/powermail_graphics/db_icons.psd";s:4:"442c";s:35:"doc/powermail_graphics/ext_icon.gif";s:4:"4fcc";s:51:"doc/powermail_graphics/icon_tx_powermail_fields.gif";s:4:"9a15";s:54:"doc/powermail_graphics/icon_tx_powermail_fields__h.gif";s:4:"e819";s:55:"doc/powermail_graphics/icon_tx_powermail_fields__ht.gif";s:4:"3c06";s:54:"doc/powermail_graphics/icon_tx_powermail_fields__t.gif";s:4:"976c";s:54:"doc/powermail_graphics/icon_tx_powermail_fieldsets.gif";s:4:"35ac";s:57:"doc/powermail_graphics/icon_tx_powermail_fieldsets__h.gif";s:4:"c8e0";s:58:"doc/powermail_graphics/icon_tx_powermail_fieldsets__ht.gif";s:4:"4f86";s:57:"doc/powermail_graphics/icon_tx_powermail_fieldsets__t.gif";s:4:"14bb";s:50:"doc/powermail_graphics/icon_tx_powermail_forms.gif";s:4:"80fe";s:53:"doc/powermail_graphics/icon_tx_powermail_forms__h.gif";s:4:"bcd5";s:54:"doc/powermail_graphics/icon_tx_powermail_forms__ht.gif";s:4:"f7e7";s:53:"doc/powermail_graphics/icon_tx_powermail_forms__t.gif";s:4:"4893";s:50:"doc/powermail_graphics/icon_tx_powermail_mails.gif";s:4:"fcba";s:53:"doc/powermail_graphics/icon_tx_powermail_mails__h.gif";s:4:"d40c";s:37:"doc/powermail_graphics/moduleicon.gif";s:4:"93ca";s:34:"doc/powermail_graphics/pm_logo.gif";s:4:"02dd";s:34:"doc/powermail_graphics/pm_logo.psd";s:4:"dabe";s:35:"doc/realurl/example_realurlpart.php";s:4:"37d3";s:16:"img/icon_csv.gif";s:4:"ddf9";s:16:"img/icon_del.gif";s:4:"90c6";s:19:"img/icon_deloff.gif";s:4:"bb91";s:18:"img/icon_delon.gif";s:4:"f1d2";s:24:"img/icon_exclamation.gif";s:4:"9878";s:17:"img/icon_info.gif";s:4:"16a6";s:18:"img/icon_print.gif";s:4:"99dc";s:25:"img/icon_select_chart.gif";s:4:"a4de";s:25:"img/icon_select_table.gif";s:4:"b878";s:18:"img/icon_table.gif";s:4:"cb96";s:16:"img/icon_xls.gif";s:4:"f031";s:29:"js/mandatoryjs/fabtabulous.js";s:4:"b727";s:28:"js/mandatoryjs/validation.js";s:4:"0273";s:31:"js/mandatoryjs/lib/prototype.js";s:4:"f424";s:29:"js/mandatoryjs/src/builder.js";s:4:"c688";s:30:"js/mandatoryjs/src/controls.js";s:4:"305b";s:30:"js/mandatoryjs/src/dragdrop.js";s:4:"969c";s:29:"js/mandatoryjs/src/effects.js";s:4:"3b4e";s:35:"js/mandatoryjs/src/scriptaculous.js";s:4:"75d1";s:28:"js/mandatoryjs/src/slider.js";s:4:"83a1";s:27:"js/mandatoryjs/src/sound.js";s:4:"d29c";s:30:"js/mandatoryjs/src/unittest.js";s:4:"a148";s:15:"js/misc/misc.js";s:4:"7d42";s:36:"js/mootools/mootools-1.2.1-packed.js";s:4:"0005";s:23:"js/mootools/mootools.js";s:4:"cad2";s:34:"js/mootools/tx_powermail-packed.js";s:4:"300c";s:27:"js/mootools/tx_powermail.js";s:4:"20a7";s:33:"lang/locallang_csh_tt_content.php";s:4:"3e6a";s:39:"lib/class.tx_powermail_countryzones.php";s:4:"c37d";s:29:"lib/class.tx_powermail_db.php";s:4:"973c";s:41:"lib/class.tx_powermail_dynamicmarkers.php";s:4:"1d53";s:40:"lib/class.tx_powermail_functions_div.php";s:4:"64a4";s:32:"lib/class.tx_powermail_geoip.php";s:4:"c639";s:34:"lib/class.tx_powermail_markers.php";s:4:"31a2";s:36:"lib/class.tx_powermail_removexss.php";s:4:"2780";s:35:"lib/class.tx_powermail_sessions.php";s:4:"bdaf";s:49:"lib/class.user_powermail_tx_powermail_example.php";s:4:"d39f";s:57:"lib/class.user_powermail_tx_powermail_fields_fe_field.php";s:4:"9d1b";s:53:"lib/class.user_powermail_tx_powermail_fields_type.php";s:4:"9aee";s:56:"lib/class.user_powermail_tx_powermail_fieldsetchoose.php";s:4:"8017";s:55:"lib/class.user_powermail_tx_powermail_forms_preview.php";s:4:"0db1";s:56:"lib/class.user_powermail_tx_powermail_forms_recip_id.php";s:4:"7ccb";s:59:"lib/class.user_powermail_tx_powermail_forms_recip_table.php";s:4:"46aa";s:60:"lib/class.user_powermail_tx_powermail_forms_sender_field.php";s:4:"6606";s:45:"lib/class.user_powermail_tx_powermail_uid.php";s:4:"236a";s:35:"lib/user_powermailOnCurrentPage.php";s:4:"34ee";s:27:"lib/user_powermail_misc.php";s:4:"3655";s:34:"lib/user_powermail_updateError.php";s:4:"688a";s:28:"lib/def/def_field_button.xml";s:4:"c443";s:29:"lib/def/def_field_captcha.xml";s:4:"86f5";s:27:"lib/def/def_field_check.xml";s:4:"ab8b";s:29:"lib/def/def_field_content.xml";s:4:"b8e8";s:35:"lib/def/def_field_countryselect.xml";s:4:"7107";s:41:"lib/def/def_field_countryselect_error.xml";s:4:"80f5";s:26:"lib/def/def_field_date.xml";s:4:"b3e1";s:43:"lib/def/def_field_date2calversion_error.xml";s:4:"99a6";s:32:"lib/def/def_field_date_error.xml";s:4:"753f";s:30:"lib/def/def_field_datetime.xml";s:4:"781d";s:27:"lib/def/def_field_error.xml";s:4:"0f3d";s:26:"lib/def/def_field_file.xml";s:4:"32a0";s:28:"lib/def/def_field_hidden.xml";s:4:"6b31";s:26:"lib/def/def_field_html.xml";s:4:"189c";s:27:"lib/def/def_field_label.xml";s:4:"7c12";s:30:"lib/def/def_field_password.xml";s:4:"a440";s:27:"lib/def/def_field_radio.xml";s:4:"9fde";s:27:"lib/def/def_field_reset.xml";s:4:"6ae2";s:28:"lib/def/def_field_select.xml";s:4:"10d5";s:28:"lib/def/def_field_submit.xml";s:4:"2c41";s:35:"lib/def/def_field_submitgraphic.xml";s:4:"54f7";s:26:"lib/def/def_field_text.xml";s:4:"a4da";s:30:"lib/def/def_field_textarea.xml";s:4:"0db5";s:26:"lib/def/def_field_time.xml";s:4:"1c2c";s:32:"lib/def/def_field_typoscript.xml";s:4:"d14a";s:35:"lib/example/examplefield_button.gif";s:4:"10e0";s:36:"lib/example/examplefield_captcha.gif";s:4:"1cc9";s:34:"lib/example/examplefield_check.gif";s:4:"32a9";s:36:"lib/example/examplefield_content.gif";s:4:"8f01";s:42:"lib/example/examplefield_countryselect.gif";s:4:"54d0";s:33:"lib/example/examplefield_date.gif";s:4:"b589";s:37:"lib/example/examplefield_datetime.gif";s:4:"a8b3";s:33:"lib/example/examplefield_file.gif";s:4:"9a1b";s:33:"lib/example/examplefield_html.gif";s:4:"6f6b";s:34:"lib/example/examplefield_label.gif";s:4:"9658";s:37:"lib/example/examplefield_password.gif";s:4:"a16d";s:34:"lib/example/examplefield_radio.gif";s:4:"8abe";s:34:"lib/example/examplefield_reset.gif";s:4:"395c";s:35:"lib/example/examplefield_select.gif";s:4:"fae2";s:35:"lib/example/examplefield_submit.gif";s:4:"522e";s:42:"lib/example/examplefield_submitgraphic.gif";s:4:"d39c";s:33:"lib/example/examplefield_text.gif";s:4:"3279";s:37:"lib/example/examplefield_textarea.gif";s:4:"eecb";s:33:"lib/example/examplefield_time.gif";s:4:"a8b3";s:39:"lib/example/examplefield_typoscript.gif";s:4:"77dd";s:34:"mod1/class.tx_powermail_action.php";s:4:"6da4";s:37:"mod1/class.tx_powermail_bedetails.php";s:4:"80c3";s:34:"mod1/class.tx_powermail_belist.php";s:4:"b9a1";s:34:"mod1/class.tx_powermail_charts.php";s:4:"37bd";s:34:"mod1/class.tx_powermail_export.php";s:4:"b31c";s:14:"mod1/clear.gif";s:4:"cc11";s:13:"mod1/conf.php";s:4:"ee1c";s:14:"mod1/index.php";s:4:"f727";s:18:"mod1/locallang.xml";s:4:"981b";s:22:"mod1/locallang_mod.xml";s:4:"6767";s:19:"mod1/moduleicon.gif";s:4:"93ca";s:20:"pi1/JSvalidation.php";s:4:"5a9a";s:14:"pi1/ce_wiz.gif";s:4:"3e0f";s:39:"pi1/class.tx_powermail_confirmation.php";s:4:"e4bf";s:31:"pi1/class.tx_powermail_form.php";s:4:"cc80";s:31:"pi1/class.tx_powermail_html.php";s:4:"b5f0";s:36:"pi1/class.tx_powermail_mandatory.php";s:4:"031d";s:30:"pi1/class.tx_powermail_pi1.php";s:4:"f2fc";s:38:"pi1/class.tx_powermail_pi1_wizicon.php";s:4:"2d6c";s:33:"pi1/class.tx_powermail_submit.php";s:4:"5179";s:17:"pi1/locallang.xml";s:4:"4866";s:32:"static/default_css/constants.txt";s:4:"d41d";s:28:"static/default_css/setup.txt";s:4:"ecfe";s:23:"templates/tmpl_all.html";s:4:"d1e2";s:32:"templates/tmpl_confirmation.html";s:4:"1bf1";s:26:"templates/tmpl_emails.html";s:4:"b3cb";s:29:"templates/tmpl_fieldwrap.html";s:4:"60a0";s:28:"templates/tmpl_formwrap.html";s:4:"81e8";s:29:"templates/tmpl_mandatory.html";s:4:"0696";s:30:"templates/tmpl_multiplejs.html";s:4:"f624";s:23:"templates/tmpl_thx.html";s:4:"d07f";}',
	'suggests' => array(
	),
);

?>