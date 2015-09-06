<?php
/*

Plugin Name: SChinese To TChinese Converter

Version: 1.0

Plugin URL: http://about.bobbyrealms.info

Description: 提供簡體轉繁體服務

Author: BobbyHo

Author Email: angela.bobby@gmail.com

Author URL: http://about.bobbyrealms.info

For: 4.0+

*/

if (!defined('SYSTEM_ROOT')) { die('Insufficient Permissions'); } 
function converter_core() {
	echo '<script language="JavaScript" src="http://tongwen.openfoundry.org/src/web/tongwen_core.js"></script>';	echo '<script language="JavaScript" src="http://tongwen.openfoundry.org/src/web/tongwen_table_s2t.js"></script>';	echo '<script language="JavaScript" src="http://tongwen.openfoundry.org/src/web/tongwen_table_ps2t.js"></script>';	echo '<script>TongWen.trans2Trad(document);</script>';
}

addAction('header','converter_core');
?>
