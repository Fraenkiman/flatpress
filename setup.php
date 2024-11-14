<?php
require_once('defaults.php');
require_once(INCLUDES_DIR . 'includes.php');
require_once(INCLUDES_DIR . 'core.cookie.php');

define('SETUPTEMP_FILE', FP_CONTENT . 'settingup.lock');

@system_init();

if (empty($_POST)) {
	if (session_status() === PHP_SESSION_ACTIVE) {
		session_destroy();
	}
	cookie_clear();
}

require('./setup/main.php');
?>
